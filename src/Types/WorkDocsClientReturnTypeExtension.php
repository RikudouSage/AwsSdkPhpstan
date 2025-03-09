<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class WorkDocsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\WorkDocs\WorkDocsClient>
     */
    public function getClass(): string
    {
        return \Aws\WorkDocs\WorkDocsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'abortDocumentVersionUpload',
            'activateUser',
            'addResourcePermissions',
            'createComment',
            'createCustomMetadata',
            'createFolder',
            'createLabels',
            'createNotificationSubscription',
            'createUser',
            'deactivateUser',
            'deleteComment',
            'deleteCustomMetadata',
            'deleteDocument',
            'deleteDocumentVersion',
            'deleteFolder',
            'deleteFolderContents',
            'deleteLabels',
            'deleteNotificationSubscription',
            'deleteUser',
            'describeActivities',
            'describeComments',
            'describeDocumentVersions',
            'describeFolderContents',
            'describeGroups',
            'describeNotificationSubscriptions',
            'describeResourcePermissions',
            'describeRootFolders',
            'describeUsers',
            'getCurrentUser',
            'getDocument',
            'getDocumentPath',
            'getDocumentVersion',
            'getFolder',
            'getFolderPath',
            'getResources',
            'initiateDocumentVersionUpload',
            'removeAllResourcePermissions',
            'removeResourcePermission',
            'restoreDocumentVersions',
            'searchResources',
            'updateDocument',
            'updateDocumentVersion',
            'updateFolder',
            'updateUser',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'abortDocumentVersionUpload' => $this->abortDocumentVersionUpload(),
            'activateUser' => $this->activateUser(),
            'addResourcePermissions' => $this->addResourcePermissions(),
            'createComment' => $this->createComment(),
            'createCustomMetadata' => $this->createCustomMetadata(),
            'createFolder' => $this->createFolder(),
            'createLabels' => $this->createLabels(),
            'createNotificationSubscription' => $this->createNotificationSubscription(),
            'createUser' => $this->createUser(),
            'deactivateUser' => $this->deactivateUser(),
            'deleteComment' => $this->deleteComment(),
            'deleteCustomMetadata' => $this->deleteCustomMetadata(),
            'deleteDocument' => $this->deleteDocument(),
            'deleteDocumentVersion' => $this->deleteDocumentVersion(),
            'deleteFolder' => $this->deleteFolder(),
            'deleteFolderContents' => $this->deleteFolderContents(),
            'deleteLabels' => $this->deleteLabels(),
            'deleteNotificationSubscription' => $this->deleteNotificationSubscription(),
            'deleteUser' => $this->deleteUser(),
            'describeActivities' => $this->describeActivities(),
            'describeComments' => $this->describeComments(),
            'describeDocumentVersions' => $this->describeDocumentVersions(),
            'describeFolderContents' => $this->describeFolderContents(),
            'describeGroups' => $this->describeGroups(),
            'describeNotificationSubscriptions' => $this->describeNotificationSubscriptions(),
            'describeResourcePermissions' => $this->describeResourcePermissions(),
            'describeRootFolders' => $this->describeRootFolders(),
            'describeUsers' => $this->describeUsers(),
            'getCurrentUser' => $this->getCurrentUser(),
            'getDocument' => $this->getDocument(),
            'getDocumentPath' => $this->getDocumentPath(),
            'getDocumentVersion' => $this->getDocumentVersion(),
            'getFolder' => $this->getFolder(),
            'getFolderPath' => $this->getFolderPath(),
            'getResources' => $this->getResources(),
            'initiateDocumentVersionUpload' => $this->initiateDocumentVersionUpload(),
            'removeAllResourcePermissions' => $this->removeAllResourcePermissions(),
            'removeResourcePermission' => $this->removeResourcePermission(),
            'restoreDocumentVersions' => $this->restoreDocumentVersions(),
            'searchResources' => $this->searchResources(),
            'updateDocument' => $this->updateDocument(),
            'updateDocumentVersion' => $this->updateDocumentVersion(),
            'updateFolder' => $this->updateFolder(),
            'updateUser' => $this->updateUser(),
        };
    }
    private function abortDocumentVersionUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function activateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ru'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addResourcePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShareResults'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InviteePrincipalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTRIBUTOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('COOWNER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILURE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CommentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThreadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('Contributor'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecipientId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                        new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ru'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createCustomMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionSize'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createNotificationSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Subscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndPoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ru'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deactivateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCustomMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDocumentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFolderContents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteLabels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNotificationSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeActivities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UserActivities'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeStamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsIndirectActivity'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('Participants'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalParent'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommentMetadata'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_CHECKED_IN'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_CHECKED_OUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_RENAMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_VERSION_UPLOADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_VERSION_DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_VERSION_VIEWED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_VERSION_DOWNLOADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_RECYCLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_RESTORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_REVERTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_UNSHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SHARE_PERMISSION_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SHAREABLE_LINK_CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SHAREABLE_LINK_REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_SHAREABLE_LINK_PERMISSION_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_MOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_COMMENT_ADDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_COMMENT_DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ANNOTATION_ADDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_ANNOTATION_DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_RENAMED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_RECYCLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_RESTORED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_SHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_UNSHARED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_SHARE_PERMISSION_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_SHAREABLE_LINK_CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_SHAREABLE_LINK_REMOVED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_SHAREABLE_LINK_PERMISSION_CHANGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER_MOVED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                        new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Users'),
                        new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginalName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FOLDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginalName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FOLDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Contributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CommentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContributorId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                                new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('en'),
                                new \PHPStan\Type\Constant\ConstantStringType('fr'),
                                new \PHPStan\Type\Constant\ConstantStringType('ko'),
                                new \PHPStan\Type\Constant\ConstantStringType('de'),
                                new \PHPStan\Type\Constant\ConstantStringType('es'),
                                new \PHPStan\Type\Constant\ConstantStringType('ja'),
                                new \PHPStan\Type\Constant\ConstantStringType('ru'),
                                new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                                new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                                new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeComments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Comments'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CommentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThreadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('Contributor'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecipientId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Username'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                        new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('en'),
                            new \PHPStan\Type\Constant\ConstantStringType('fr'),
                            new \PHPStan\Type\Constant\ConstantStringType('ko'),
                            new \PHPStan\Type\Constant\ConstantStringType('de'),
                            new \PHPStan\Type\Constant\ConstantStringType('es'),
                            new \PHPStan\Type\Constant\ConstantStringType('ja'),
                            new \PHPStan\Type\Constant\ConstantStringType('ru'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                            new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                            new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDocumentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DocumentVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                    ]), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                    ]), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFolderContents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Folders'),
                new \PHPStan\Type\Constant\ConstantStringType('Documents'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionSize'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Groups'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeNotificationSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Subscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndPoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeResourcePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ANONYMOUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Role'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONTRIBUTOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('OWNER'),
                            new \PHPStan\Type\Constant\ConstantStringType('COOWNER'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('INHERITED'),
                        ]),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRootFolders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Folders'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionSize'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Users'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfUsers'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ru'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCurrentUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ru'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDocumentPath(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Path'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Components'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getDocumentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                    ]), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('CustomMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionSize'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getFolderPath(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Path'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Components'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Folders'),
                new \PHPStan\Type\Constant\ConstantStringType('Documents'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionSize'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function initiateDocumentVersionUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestVersionMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UploadUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('SignedHeaders'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function removeAllResourcePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function removeResourcePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function restoreDocumentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function searchResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('FolderMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommentMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DocumentVersionMetadata'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('FOLDER'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENT_VERSION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestVersionMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                        new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                            new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                                new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                            ]), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                                new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                            ]), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentFolderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceState'),
                        new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                        new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestVersionSize'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECYCLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECYCLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CommentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Contributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CommentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecipientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContributorId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                            new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                            new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USER'),
                                new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                                new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                                new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                                new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('en'),
                                new \PHPStan\Type\Constant\ConstantStringType('fr'),
                                new \PHPStan\Type\Constant\ConstantStringType('ko'),
                                new \PHPStan\Type\Constant\ConstantStringType('de'),
                                new \PHPStan\Type\Constant\ConstantStringType('es'),
                                new \PHPStan\Type\Constant\ConstantStringType('ja'),
                                new \PHPStan\Type\Constant\ConstantStringType('ru'),
                                new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                                new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                                new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                                new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('Signature'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentCreatedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentModifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatorId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SMALL_HQ'),
                            new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        ]), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ORIGINAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WITH_COMMENTS'),
                        ]), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDocument(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateDocumentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateFolder(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('User'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('GivenName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Surname'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecycleBinFolderId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locale'),
                    new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('POWERUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MINIMALUSER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKSPACESUSER'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('en'),
                        new \PHPStan\Type\Constant\ConstantStringType('fr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ko'),
                        new \PHPStan\Type\Constant\ConstantStringType('de'),
                        new \PHPStan\Type\Constant\ConstantStringType('es'),
                        new \PHPStan\Type\Constant\ConstantStringType('ja'),
                        new \PHPStan\Type\Constant\ConstantStringType('ru'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_CN'),
                        new \PHPStan\Type\Constant\ConstantStringType('zh_TW'),
                        new \PHPStan\Type\Constant\ConstantStringType('pt_BR'),
                        new \PHPStan\Type\Constant\ConstantStringType('default'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageUtilizedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageRule'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StorageAllocatedInBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNLIMITED'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUOTA'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
}