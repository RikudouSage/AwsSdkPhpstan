<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class QAppsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\QApps\QAppsClient>
     */
    public function getClass(): string
    {
        return \Aws\QApps\QAppsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateLibraryItemReview',
            'associateQAppWithUser',
            'batchCreateCategory',
            'batchDeleteCategory',
            'batchUpdateCategory',
            'createLibraryItem',
            'createPresignedUrl',
            'createQApp',
            'deleteLibraryItem',
            'deleteQApp',
            'describeQAppPermissions',
            'disassociateLibraryItemReview',
            'disassociateQAppFromUser',
            'exportQAppSessionData',
            'getLibraryItem',
            'getQApp',
            'getQAppSession',
            'getQAppSessionMetadata',
            'importDocument',
            'listCategories',
            'listLibraryItems',
            'listQAppSessionData',
            'listQApps',
            'listTagsForResource',
            'predictQApp',
            'startQAppSession',
            'stopQAppSession',
            'tagResource',
            'untagResource',
            'updateLibraryItem',
            'updateLibraryItemMetadata',
            'updateQApp',
            'updateQAppPermissions',
            'updateQAppSession',
            'updateQAppSessionMetadata',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateLibraryItemReview' => $this->associateLibraryItemReview(),
            'associateQAppWithUser' => $this->associateQAppWithUser(),
            'batchCreateCategory' => $this->batchCreateCategory(),
            'batchDeleteCategory' => $this->batchDeleteCategory(),
            'batchUpdateCategory' => $this->batchUpdateCategory(),
            'createLibraryItem' => $this->createLibraryItem(),
            'createPresignedUrl' => $this->createPresignedUrl(),
            'createQApp' => $this->createQApp(),
            'deleteLibraryItem' => $this->deleteLibraryItem(),
            'deleteQApp' => $this->deleteQApp(),
            'describeQAppPermissions' => $this->describeQAppPermissions(),
            'disassociateLibraryItemReview' => $this->disassociateLibraryItemReview(),
            'disassociateQAppFromUser' => $this->disassociateQAppFromUser(),
            'exportQAppSessionData' => $this->exportQAppSessionData(),
            'getLibraryItem' => $this->getLibraryItem(),
            'getQApp' => $this->getQApp(),
            'getQAppSession' => $this->getQAppSession(),
            'getQAppSessionMetadata' => $this->getQAppSessionMetadata(),
            'importDocument' => $this->importDocument(),
            'listCategories' => $this->listCategories(),
            'listLibraryItems' => $this->listLibraryItems(),
            'listQAppSessionData' => $this->listQAppSessionData(),
            'listQApps' => $this->listQApps(),
            'listTagsForResource' => $this->listTagsForResource(),
            'predictQApp' => $this->predictQApp(),
            'startQAppSession' => $this->startQAppSession(),
            'stopQAppSession' => $this->stopQAppSession(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateLibraryItem' => $this->updateLibraryItem(),
            'updateLibraryItemMetadata' => $this->updateLibraryItemMetadata(),
            'updateQApp' => $this->updateQApp(),
            'updateQAppPermissions' => $this->updateQAppPermissions(),
            'updateQAppSession' => $this->updateQAppSession(),
            'updateQAppSessionMetadata' => $this->updateQAppSessionMetadata(),
        };
    }
    private function associateLibraryItemReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associateQAppWithUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchCreateCategory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchDeleteCategory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function batchUpdateCategory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createLibraryItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('libraryItemId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('ratingCount'),
                new \PHPStan\Type\Constant\ConstantStringType('isVerified'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createPresignedUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fileId'),
                new \PHPStan\Type\Constant\ConstantStringType('presignedUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('presignedUrlFields'),
                new \PHPStan\Type\Constant\ConstantStringType('presignedUrlExpiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createQApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('title'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('initialPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('requiredCapabilities'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrievalMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PluginMode'),
                ]),
            ]),
        ]);
    }
    private function deleteLibraryItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteQApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeQAppPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('read'),
                        new \PHPStan\Type\Constant\ConstantStringType('write'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userType'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disassociateLibraryItemReview(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disassociateQAppFromUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function exportQAppSessionData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('csvFileLink'),
                new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLibraryItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('libraryItemId'),
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('categories'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('ratingCount'),
                new \PHPStan\Type\Constant\ConstantStringType('isRatedByUser'),
                new \PHPStan\Type\Constant\ConstantStringType('userCount'),
                new \PHPStan\Type\Constant\ConstantStringType('isVerified'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('color'),
                    new \PHPStan\Type\Constant\ConstantStringType('appCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getQApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('title'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('initialPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('requiredCapabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('appDefinition'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrievalMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PluginMode'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appDefinitionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('cards'),
                    new \PHPStan\Type\Constant\ConstantStringType('canEdit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('textInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('qQuery'),
                        new \PHPStan\Type\Constant\ConstantStringType('qPlugin'),
                        new \PHPStan\Type\Constant\ConstantStringType('fileUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('formInput'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependencies'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('placeholder'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependencies'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('outputSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('attributeFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('memoryReferences'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('approved-sources'),
                                new \PHPStan\Type\Constant\ConstantStringType('llm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('andAllFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('orAllFilters'),
                                new \PHPStan\Type\Constant\ConstantStringType('notFilter'),
                                new \PHPStan\Type\Constant\ConstantStringType('equalsTo'),
                                new \PHPStan\Type\Constant\ConstantStringType('containsAll'),
                                new \PHPStan\Type\Constant\ConstantStringType('containsAny'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEquals'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEquals'),
                            ], [
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependencies'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                            new \PHPStan\Type\Constant\ConstantStringType('pluginType'),
                            new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICE_NOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('JIRA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZENDESK'),
                                new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASANA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ATLASSIAN_CONFLUENCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('GOOGLE_CALENDAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('JIRA_CLOUD'),
                                new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_EXCHANGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('MICROSOFT_TEAMS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PAGERDUTY_ADVANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SALESFORCE_CRM'),
                                new \PHPStan\Type\Constant\ConstantStringType('SERVICENOW_NOW_PLATFORM'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMARTSHEET'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZENDESK_SUITE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependencies'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('filename'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileId'),
                            new \PHPStan\Type\Constant\ConstantStringType('allowOverride'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                            new \PHPStan\Type\Constant\ConstantStringType('dependencies'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('computeMode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('schema'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('append'),
                                new \PHPStan\Type\Constant\ConstantStringType('replace'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getQAppSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionName'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('latestPublishedAppVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('cardStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('userIsHost'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('currentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('currentValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('submissions'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('submissionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getQAppSessionMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionName'),
                new \PHPStan\Type\Constant\ConstantStringType('sharingConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionOwner'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('acceptResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('revealCards'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function importDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCategories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('categories'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('color'),
                    new \PHPStan\Type\Constant\ConstantStringType('appCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listLibraryItems(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('libraryItems'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('libraryItemId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ratingCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('isRatedByUser'),
                    new \PHPStan\Type\Constant\ConstantStringType('userCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('isVerified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('color'),
                        new \PHPStan\Type\Constant\ConstantStringType('appCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQAppSessionData(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionData'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cardId'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                    new \PHPStan\Type\Constant\ConstantStringType('submissionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQApps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apps'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('canEdit'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('isVerified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
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
    private function predictQApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
                new \PHPStan\Type\Constant\ConstantStringType('problemStatement'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('appDefinition'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cards'),
                        new \PHPStan\Type\Constant\ConstantStringType('initialPrompt'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('textInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('qQuery'),
                            new \PHPStan\Type\Constant\ConstantStringType('qPlugin'),
                            new \PHPStan\Type\Constant\ConstantStringType('fileUpload'),
                            new \PHPStan\Type\Constant\ConstantStringType('formInput'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('title'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('placeholder'),
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                    new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('title'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                                new \PHPStan\Type\Constant\ConstantStringType('outputSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('attributeFilter'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                    new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('approved-sources'),
                                    new \PHPStan\Type\Constant\ConstantStringType('llm'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('andAllFilters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('orAllFilters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('notFilter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('equalsTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('containsAll'),
                                    new \PHPStan\Type\Constant\ConstantStringType('containsAny'),
                                    new \PHPStan\Type\Constant\ConstantStringType('greaterThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('greaterThanOrEquals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lessThan'),
                                    new \PHPStan\Type\Constant\ConstantStringType('lessThanOrEquals'),
                                ], [
                                    new \PHPStan\Type\MixedType(),
                                    new \PHPStan\Type\MixedType(),
                                    new \PHPStan\Type\MixedType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('stringListValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('dateValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('title'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('prompt'),
                                new \PHPStan\Type\Constant\ConstantStringType('pluginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('actionIdentifier'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                    new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('title'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('filename'),
                                new \PHPStan\Type\Constant\ConstantStringType('fileId'),
                                new \PHPStan\Type\Constant\ConstantStringType('allowOverride'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                    new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('title'),
                                new \PHPStan\Type\Constant\ConstantStringType('id'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('computeMode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text-input'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-query'),
                                    new \PHPStan\Type\Constant\ConstantStringType('file-upload'),
                                    new \PHPStan\Type\Constant\ConstantStringType('q-plugin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('form-input'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('append'),
                                    new \PHPStan\Type\Constant\ConstantStringType('replace'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startQAppSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopQAppSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
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
    private function updateLibraryItem(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('libraryItemId'),
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('categories'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('ratingCount'),
                new \PHPStan\Type\Constant\ConstantStringType('isRatedByUser'),
                new \PHPStan\Type\Constant\ConstantStringType('userCount'),
                new \PHPStan\Type\Constant\ConstantStringType('isVerified'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('color'),
                    new \PHPStan\Type\Constant\ConstantStringType('appCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateLibraryItemMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateQApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                new \PHPStan\Type\Constant\ConstantStringType('title'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('initialPrompt'),
                new \PHPStan\Type\Constant\ConstantStringType('appVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedBy'),
                new \PHPStan\Type\Constant\ConstantStringType('requiredCapabilities'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FileUpload'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrievalMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PluginMode'),
                ]),
            ]),
        ]);
    }
    private function updateQAppPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('appId'),
                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('read'),
                        new \PHPStan\Type\Constant\ConstantStringType('write'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                        new \PHPStan\Type\Constant\ConstantStringType('userType'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('owner'),
                            new \PHPStan\Type\Constant\ConstantStringType('user'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateQAppSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateQAppSessionMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionName'),
                new \PHPStan\Type\Constant\ConstantStringType('sharingConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('acceptResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('revealCards'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
}