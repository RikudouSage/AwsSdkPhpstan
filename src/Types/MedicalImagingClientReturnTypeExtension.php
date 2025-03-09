<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MedicalImagingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MedicalImaging\MedicalImagingClient>
     */
    public function getClass(): string
    {
        return \Aws\MedicalImaging\MedicalImagingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'copyImageSet',
            'createDatastore',
            'deleteDatastore',
            'deleteImageSet',
            'getDICOMImportJob',
            'getDatastore',
            'getImageFrame',
            'getImageSet',
            'getImageSetMetadata',
            'listDICOMImportJobs',
            'listDatastores',
            'listImageSetVersions',
            'listTagsForResource',
            'searchImageSets',
            'startDICOMImportJob',
            'tagResource',
            'untagResource',
            'updateImageSetMetadata',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'copyImageSet' => $this->copyImageSet(),
            'createDatastore' => $this->createDatastore(),
            'deleteDatastore' => $this->deleteDatastore(),
            'deleteImageSet' => $this->deleteImageSet(),
            'getDICOMImportJob' => $this->getDICOMImportJob(),
            'getDatastore' => $this->getDatastore(),
            'getImageFrame' => $this->getImageFrame(),
            'getImageSet' => $this->getImageSet(),
            'getImageSetMetadata' => $this->getImageSetMetadata(),
            'listDICOMImportJobs' => $this->listDICOMImportJobs(),
            'listDatastores' => $this->listDatastores(),
            'listImageSetVersions' => $this->listImageSetVersions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'searchImageSets' => $this->searchImageSets(),
            'startDICOMImportJob' => $this->startDICOMImportJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateImageSetMetadata' => $this->updateImageSetMetadata(),
        };
    }
    private function copyImageSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceImageSetProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationImageSetProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetWorkflowStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING_WITH_READ_ONLY_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('latestVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetWorkflowStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING_WITH_READ_ONLY_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDatastore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('datastoreStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function deleteDatastore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('datastoreStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function deleteImageSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetState'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetWorkflowStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_WITH_READ_ONLY_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function getDICOMImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('submittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDatastore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreProperties'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreName'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getImageFrame(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageFrameBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
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
    private function getImageSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetState'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetWorkflowStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deletedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('overrides'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_WITH_READ_ONLY_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('forced'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getImageSetMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageSetMetadataBlob'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('contentEncoding'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDICOMImportJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataAccessRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('submittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatastores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreName'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('datastoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImageSetVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageSetPropertiesList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImageSetWorkflowStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING_WITH_READ_ONLY_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('forced'),
                    ], [
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function searchImageSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('imageSetsMetadataSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('sort'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('DICOMTags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMPatientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMPatientName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMPatientBirthDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMPatientSex'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMStudyInstanceUID'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMStudyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMStudyDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMNumberOfStudyRelatedSeries'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMNumberOfStudyRelatedInstances'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMAccessionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMSeriesInstanceUID'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMSeriesModality'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMSeriesBodyPart'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMSeriesNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMStudyDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMStudyTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sortOrder'),
                    new \PHPStan\Type\Constant\ConstantStringType('sortField'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESC'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DICOMStudyDateAndTime'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDICOMImportJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('submittedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateImageSetMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datastoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('latestVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetState'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSetWorkflowStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPYING_WITH_READ_ONLY_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}