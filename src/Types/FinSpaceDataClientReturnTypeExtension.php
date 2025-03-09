<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class FinSpaceDataClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\FinSpaceData\FinSpaceDataClient>
     */
    public function getClass(): string
    {
        return \Aws\FinSpaceData\FinSpaceDataClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateUserToPermissionGroup',
            'createChangeset',
            'createDataView',
            'createDataset',
            'createPermissionGroup',
            'createUser',
            'deleteDataset',
            'deletePermissionGroup',
            'disableUser',
            'disassociateUserFromPermissionGroup',
            'enableUser',
            'getChangeset',
            'getDataView',
            'getDataset',
            'getExternalDataViewAccessDetails',
            'getPermissionGroup',
            'getProgrammaticAccessCredentials',
            'getUser',
            'getWorkingLocation',
            'listChangesets',
            'listDataViews',
            'listDatasets',
            'listPermissionGroups',
            'listPermissionGroupsByUser',
            'listUsers',
            'listUsersByPermissionGroup',
            'resetUserPassword',
            'updateChangeset',
            'updateDataset',
            'updatePermissionGroup',
            'updateUser',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateUserToPermissionGroup' => $this->associateUserToPermissionGroup(),
            'createChangeset' => $this->createChangeset(),
            'createDataView' => $this->createDataView(),
            'createDataset' => $this->createDataset(),
            'createPermissionGroup' => $this->createPermissionGroup(),
            'createUser' => $this->createUser(),
            'deleteDataset' => $this->deleteDataset(),
            'deletePermissionGroup' => $this->deletePermissionGroup(),
            'disableUser' => $this->disableUser(),
            'disassociateUserFromPermissionGroup' => $this->disassociateUserFromPermissionGroup(),
            'enableUser' => $this->enableUser(),
            'getChangeset' => $this->getChangeset(),
            'getDataView' => $this->getDataView(),
            'getDataset' => $this->getDataset(),
            'getExternalDataViewAccessDetails' => $this->getExternalDataViewAccessDetails(),
            'getPermissionGroup' => $this->getPermissionGroup(),
            'getProgrammaticAccessCredentials' => $this->getProgrammaticAccessCredentials(),
            'getUser' => $this->getUser(),
            'getWorkingLocation' => $this->getWorkingLocation(),
            'listChangesets' => $this->listChangesets(),
            'listDataViews' => $this->listDataViews(),
            'listDatasets' => $this->listDatasets(),
            'listPermissionGroups' => $this->listPermissionGroups(),
            'listPermissionGroupsByUser' => $this->listPermissionGroupsByUser(),
            'listUsers' => $this->listUsers(),
            'listUsersByPermissionGroup' => $this->listUsersByPermissionGroup(),
            'resetUserPassword' => $this->resetUserPassword(),
            'updateChangeset' => $this->updateChangeset(),
            'updateDataset' => $this->updateDataset(),
            'updatePermissionGroup' => $this->updatePermissionGroup(),
            'updateUser' => $this->updateUser(),
        };
    }
    private function associateUserToPermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createChangeset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataViewId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('permissionGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deletePermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('permissionGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateUserFromPermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function enableUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getChangeset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('changesetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('changeType'),
                new \PHPStan\Type\Constant\ConstantStringType('sourceParams'),
                new \PHPStan\Type\Constant\ConstantStringType('formatParams'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('activeUntilTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('activeFromTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('updatesChangesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('updatedByChangesetId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                    new \PHPStan\Type\Constant\ConstantStringType('APPEND'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCategory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_RECOVERABLE'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDataView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('autoUpdate'),
                new \PHPStan\Type\Constant\ConstantStringType('partitionColumns'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('asOfTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('sortColumns'),
                new \PHPStan\Type\Constant\ConstantStringType('dataViewId'),
                new \PHPStan\Type\Constant\ConstantStringType('dataViewArn'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationTypeParams'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCategory'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_EXCEPTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('USER_RECOVERABLE'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3DestinationExportFileFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3DestinationExportFileFormatOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELIMITED_TEXT'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_CLEANUP_FAILED'),
                ]),
            ]),
        ]);
    }
    private function getDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetTitle'),
                new \PHPStan\Type\Constant\ConstantStringType('kind'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('schemaDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('alias'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TABULAR'),
                    new \PHPStan\Type\Constant\ConstantStringType('NON_TABULAR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('tabularSchemaConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('columns'),
                        new \PHPStan\Type\Constant\ConstantStringType('primaryKeyColumns'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                            new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('columnDescription'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                                new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DATETIME'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                ]),
            ]),
        ]);
    }
    private function getExternalDataViewAccessDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getPermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('permissionGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('permissionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDataset'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManageClusters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManageUsersAndGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManageAttributeSets'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewAuditData'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessNotebooks'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetTemporaryCredentials'),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getProgrammaticAccessCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('durationInMinutes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('secretAccessKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionToken'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('apiAccess'),
                new \PHPStan\Type\Constant\ConstantStringType('apiAccessPrincipalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastEnabledTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastDisabledTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lastLoginTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                    new \PHPStan\Type\Constant\ConstantStringType('APP_USER'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getWorkingLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Path'),
                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChangesets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('changesets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('changesetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('changeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('formatParams'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeUntilTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeFromTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatesChangesetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedByChangesetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPEND'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_REQUESTED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCategory'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_RECOVERABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataViews(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('dataViews'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataViewId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataViewArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asOfTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('partitionColumns'),
                    new \PHPStan\Type\Constant\ConstantStringType('sortColumns'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationTypeProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMEOUT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_CLEANUP_FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorCategory'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVICE_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('USER_RECOVERABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('destinationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3DestinationExportFileFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3DestinationExportFileFormatOptions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PARQUET'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELIMITED_TEXT'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listDatasets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasets'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetTitle'),
                    new \PHPStan\Type\Constant\ConstantStringType('kind'),
                    new \PHPStan\Type\Constant\ConstantStringType('datasetDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('alias'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TABULAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('NON_TABULAR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('email'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tabularSchemaConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('columns'),
                            new \PHPStan\Type\Constant\ConstantStringType('primaryKeyColumns'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('dataType'),
                                new \PHPStan\Type\Constant\ConstantStringType('columnName'),
                                new \PHPStan\Type\Constant\ConstantStringType('columnDescription'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TINYINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SMALLINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FLOAT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATETIME'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BINARY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPermissionGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('permissionGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('permissionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('applicationPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDataset'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManageClusters'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManageUsersAndGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('ManageAttributeSets'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewAuditData'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessNotebooks'),
                        new \PHPStan\Type\Constant\ConstantStringType('GetTemporaryCredentials'),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPermissionGroupsByUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('permissionGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('permissionGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('users'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                    new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiAccessPrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastEnabledTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDisabledTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastLoginTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('APP_USER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsersByPermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('users'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastName'),
                    new \PHPStan\Type\Constant\ConstantStringType('emailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiAccessPrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('membershipStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        new \PHPStan\Type\Constant\ConstantStringType('APP_USER'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ADDITION_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVAL_IN_PROGRESS'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function resetUserPassword(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
                new \PHPStan\Type\Constant\ConstantStringType('temporaryPassword'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateChangeset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('changesetId'),
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDataset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('datasetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePermissionGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('permissionGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}