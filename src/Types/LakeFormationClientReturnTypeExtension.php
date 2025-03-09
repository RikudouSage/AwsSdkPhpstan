<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LakeFormationClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LakeFormation\LakeFormationClient>
     */
    public function getClass(): string
    {
        return \Aws\LakeFormation\LakeFormationClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addLFTagsToResource',
            'assumeDecoratedRoleWithSAML',
            'batchGrantPermissions',
            'batchRevokePermissions',
            'cancelTransaction',
            'commitTransaction',
            'createDataCellsFilter',
            'createLFTag',
            'createLFTagExpression',
            'createLakeFormationIdentityCenterConfiguration',
            'createLakeFormationOptIn',
            'deleteDataCellsFilter',
            'deleteLFTag',
            'deleteLFTagExpression',
            'deleteLakeFormationIdentityCenterConfiguration',
            'deleteLakeFormationOptIn',
            'deleteObjectsOnCancel',
            'deregisterResource',
            'describeLakeFormationIdentityCenterConfiguration',
            'describeResource',
            'describeTransaction',
            'extendTransaction',
            'getDataCellsFilter',
            'getDataLakePrincipal',
            'getDataLakeSettings',
            'getEffectivePermissionsForPath',
            'getLFTag',
            'getLFTagExpression',
            'getQueryState',
            'getQueryStatistics',
            'getResourceLFTags',
            'getTableObjects',
            'getTemporaryGluePartitionCredentials',
            'getTemporaryGlueTableCredentials',
            'getWorkUnitResults',
            'getWorkUnits',
            'grantPermissions',
            'listDataCellsFilter',
            'listLFTagExpressions',
            'listLFTags',
            'listLakeFormationOptIns',
            'listPermissions',
            'listResources',
            'listTableStorageOptimizers',
            'listTransactions',
            'putDataLakeSettings',
            'registerResource',
            'removeLFTagsFromResource',
            'revokePermissions',
            'searchDatabasesByLFTags',
            'searchTablesByLFTags',
            'startQueryPlanning',
            'startTransaction',
            'updateDataCellsFilter',
            'updateLFTag',
            'updateLFTagExpression',
            'updateLakeFormationIdentityCenterConfiguration',
            'updateResource',
            'updateTableObjects',
            'updateTableStorageOptimizer',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addLFTagsToResource' => $this->addLFTagsToResource(),
            'assumeDecoratedRoleWithSAML' => $this->assumeDecoratedRoleWithSAML(),
            'batchGrantPermissions' => $this->batchGrantPermissions(),
            'batchRevokePermissions' => $this->batchRevokePermissions(),
            'cancelTransaction' => $this->cancelTransaction(),
            'commitTransaction' => $this->commitTransaction(),
            'createDataCellsFilter' => $this->createDataCellsFilter(),
            'createLFTag' => $this->createLFTag(),
            'createLFTagExpression' => $this->createLFTagExpression(),
            'createLakeFormationIdentityCenterConfiguration' => $this->createLakeFormationIdentityCenterConfiguration(),
            'createLakeFormationOptIn' => $this->createLakeFormationOptIn(),
            'deleteDataCellsFilter' => $this->deleteDataCellsFilter(),
            'deleteLFTag' => $this->deleteLFTag(),
            'deleteLFTagExpression' => $this->deleteLFTagExpression(),
            'deleteLakeFormationIdentityCenterConfiguration' => $this->deleteLakeFormationIdentityCenterConfiguration(),
            'deleteLakeFormationOptIn' => $this->deleteLakeFormationOptIn(),
            'deleteObjectsOnCancel' => $this->deleteObjectsOnCancel(),
            'deregisterResource' => $this->deregisterResource(),
            'describeLakeFormationIdentityCenterConfiguration' => $this->describeLakeFormationIdentityCenterConfiguration(),
            'describeResource' => $this->describeResource(),
            'describeTransaction' => $this->describeTransaction(),
            'extendTransaction' => $this->extendTransaction(),
            'getDataCellsFilter' => $this->getDataCellsFilter(),
            'getDataLakePrincipal' => $this->getDataLakePrincipal(),
            'getDataLakeSettings' => $this->getDataLakeSettings(),
            'getEffectivePermissionsForPath' => $this->getEffectivePermissionsForPath(),
            'getLFTag' => $this->getLFTag(),
            'getLFTagExpression' => $this->getLFTagExpression(),
            'getQueryState' => $this->getQueryState(),
            'getQueryStatistics' => $this->getQueryStatistics(),
            'getResourceLFTags' => $this->getResourceLFTags(),
            'getTableObjects' => $this->getTableObjects(),
            'getTemporaryGluePartitionCredentials' => $this->getTemporaryGluePartitionCredentials(),
            'getTemporaryGlueTableCredentials' => $this->getTemporaryGlueTableCredentials(),
            'getWorkUnitResults' => $this->getWorkUnitResults(),
            'getWorkUnits' => $this->getWorkUnits(),
            'grantPermissions' => $this->grantPermissions(),
            'listDataCellsFilter' => $this->listDataCellsFilter(),
            'listLFTagExpressions' => $this->listLFTagExpressions(),
            'listLFTags' => $this->listLFTags(),
            'listLakeFormationOptIns' => $this->listLakeFormationOptIns(),
            'listPermissions' => $this->listPermissions(),
            'listResources' => $this->listResources(),
            'listTableStorageOptimizers' => $this->listTableStorageOptimizers(),
            'listTransactions' => $this->listTransactions(),
            'putDataLakeSettings' => $this->putDataLakeSettings(),
            'registerResource' => $this->registerResource(),
            'removeLFTagsFromResource' => $this->removeLFTagsFromResource(),
            'revokePermissions' => $this->revokePermissions(),
            'searchDatabasesByLFTags' => $this->searchDatabasesByLFTags(),
            'searchTablesByLFTags' => $this->searchTablesByLFTags(),
            'startQueryPlanning' => $this->startQueryPlanning(),
            'startTransaction' => $this->startTransaction(),
            'updateDataCellsFilter' => $this->updateDataCellsFilter(),
            'updateLFTag' => $this->updateLFTag(),
            'updateLFTagExpression' => $this->updateLFTagExpression(),
            'updateLakeFormationIdentityCenterConfiguration' => $this->updateLakeFormationIdentityCenterConfiguration(),
            'updateResource' => $this->updateResource(),
            'updateTableObjects' => $this->updateTableObjects(),
            'updateTableStorageOptimizer' => $this->updateTableStorageOptimizer(),
        };
    }
    private function addLFTagsToResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function assumeDecoratedRoleWithSAML(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function batchGrantPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestEntry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsWithGrantOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                            new \PHPStan\Type\Constant\ConstantStringType('Database'),
                            new \PHPStan\Type\Constant\ConstantStringType('Table'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableWithColumns'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LFTagExpression'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableWildcard'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchRevokePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestEntry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('PermissionsWithGrantOption'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                            new \PHPStan\Type\Constant\ConstantStringType('Database'),
                            new \PHPStan\Type\Constant\ConstantStringType('Table'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableWithColumns'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilter'),
                            new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                            new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LFTagExpression'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableWildcard'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function commitTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransactionStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMMIT_IN_PROGRESS'),
                ]),
            ]),
        ]);
    }
    private function createDataCellsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLFTag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLFTagExpression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createLakeFormationIdentityCenterConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLakeFormationOptIn(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataCellsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLFTag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLFTagExpression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLakeFormationIdentityCenterConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLakeFormationOptIn(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteObjectsOnCancel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeLakeFormationIdentityCenterConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExternalFiltering'),
                new \PHPStan\Type\Constant\ConstantStringType('ShareRecipients'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceShare'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizedTargets'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('WithFederation'),
                    new \PHPStan\Type\Constant\ConstantStringType('HybridAccessEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function describeTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransactionDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMIT_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function extendTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getDataCellsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilter'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilterExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllRowsWildcard'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDataLakePrincipal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Identity'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDataLakeSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataLakeSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataLakeAdmins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadOnlyAdmins'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDatabaseDefaultPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTableDefaultPermissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustedResourceOwners'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowExternalDataFiltering'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowFullTableExternalDataAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExternalDataFilteringAllowList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizedSessionTagValueList'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                            new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getEffectivePermissionsForPath(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsWithGrantOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedBy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableWithColumns'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableWildcard'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceShare'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLFTag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getLFTagExpression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function getQueryState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKUNITS_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
            ]),
        ]);
    }
    private function getQueryStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('PlanningStatistics'),
                new \PHPStan\Type\Constant\ConstantStringType('QuerySubmissionTime'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AverageExecutionTimeMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataScannedBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkUnitsExecutedCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EstimatedDataToScanBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlanningTimeMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueTimeMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkUnitsGeneratedCount'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getResourceLFTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LFTagOnDatabase'),
                new \PHPStan\Type\Constant\ConstantStringType('LFTagsOnTable'),
                new \PHPStan\Type\Constant\ConstantStringType('LFTagsOnColumns'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LFTags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getTableObjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Objects'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PartitionValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('Objects'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTemporaryGluePartitionCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getTemporaryGlueTableCredentials(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretAccessKey'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('VendedS3Path'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getWorkUnitResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResultStream'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getWorkUnits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkUnitRanges'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('WorkUnitIdMax'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkUnitIdMin'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkUnitToken'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function grantPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function listDataCellsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilters'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('RowFilter'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FilterExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllRowsWildcard'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLFTagExpressions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LFTagExpressions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLFTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LFTags'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLakeFormationOptIns(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LakeFormationOptInsInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedBy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableWithColumns'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableWildcard'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PrincipalResourcePermissions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionsWithGrantOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedBy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataLakePrincipalIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableWithColumns'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataCellsFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagExpression'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableWildcard'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnNames'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnWildcard'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExcludedColumnNames'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TableCatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpressionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DROP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATA_LOCATION_ACCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRANT_WITH_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_LF_TAG_EXPRESSION'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_CATALOG'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUPER_USER'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceShare'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('WithFederation'),
                    new \PHPStan\Type\Constant\ConstantStringType('HybridAccessEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTableStorageOptimizers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StorageOptimizerList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StorageOptimizerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunDetails'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPACTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('GARBAGE_COLLECTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTransactions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Transactions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransactionEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMMIT_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putDataLakeSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeLFTagsFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Failures'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LFTag'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function revokePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function searchDatabasesByLFTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Database'),
                    new \PHPStan\Type\Constant\ConstantStringType('LFTags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function searchTablesByLFTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TableList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                    new \PHPStan\Type\Constant\ConstantStringType('LFTagOnDatabase'),
                    new \PHPStan\Type\Constant\ConstantStringType('LFTagsOnTable'),
                    new \PHPStan\Type\Constant\ConstantStringType('LFTagsOnColumns'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableWildcard'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                ])),
            ]),
        ]);
    }
    private function startQueryPlanning(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startTransaction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransactionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDataCellsFilter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLFTag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLFTagExpression(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLakeFormationIdentityCenterConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTableObjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateTableStorageOptimizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Result'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}