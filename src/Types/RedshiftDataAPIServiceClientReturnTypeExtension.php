<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class RedshiftDataAPIServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\RedshiftDataAPIService\RedshiftDataAPIServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\RedshiftDataAPIService\RedshiftDataAPIServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchExecuteStatement',
            'cancelStatement',
            'describeStatement',
            'describeTable',
            'executeStatement',
            'getStatementResult',
            'getStatementResultV2',
            'listDatabases',
            'listSchemas',
            'listStatements',
            'listTables',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchExecuteStatement' => $this->batchExecuteStatement(),
            'cancelStatement' => $this->cancelStatement(),
            'describeStatement' => $this->describeStatement(),
            'describeTable' => $this->describeTable(),
            'executeStatement' => $this->executeStatement(),
            'getStatementResult' => $this->getStatementResult(),
            'getStatementResultV2' => $this->getStatementResultV2(),
            'listDatabases' => $this->listDatabases(),
            'listSchemas' => $this->listSchemas(),
            'listStatements' => $this->listStatements(),
            'listTables' => $this->listTables(),
        };
    }
    private function batchExecuteStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
                new \PHPStan\Type\Constant\ConstantStringType('DbGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkgroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
                new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('HasResultSet'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                new \PHPStan\Type\Constant\ConstantStringType('RedshiftPid'),
                new \PHPStan\Type\Constant\ConstantStringType('RedshiftQueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultRows'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultSize'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('SubStatements'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkgroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PICKED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasResultSet'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftQueryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultRows'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PICKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ColumnList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('TableName'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columnDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCaseSensitive'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                    new \PHPStan\Type\Constant\ConstantStringType('label'),
                    new \PHPStan\Type\Constant\ConstantStringType('length'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('nullable'),
                    new \PHPStan\Type\Constant\ConstantStringType('precision'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ClusterIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
                new \PHPStan\Type\Constant\ConstantStringType('DbGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkgroupName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStatementResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ColumnMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalNumRows'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columnDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCaseSensitive'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                    new \PHPStan\Type\Constant\ConstantStringType('label'),
                    new \PHPStan\Type\Constant\ConstantStringType('length'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('nullable'),
                    new \PHPStan\Type\Constant\ConstantStringType('precision'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('blobValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('isNull'),
                    new \PHPStan\Type\Constant\ConstantStringType('longValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getStatementResultV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ColumnMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalNumRows'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('columnDefault'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCaseSensitive'),
                    new \PHPStan\Type\Constant\ConstantStringType('isCurrency'),
                    new \PHPStan\Type\Constant\ConstantStringType('isSigned'),
                    new \PHPStan\Type\Constant\ConstantStringType('label'),
                    new \PHPStan\Type\Constant\ConstantStringType('length'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('nullable'),
                    new \PHPStan\Type\Constant\ConstantStringType('precision'),
                    new \PHPStan\Type\Constant\ConstantStringType('scale'),
                    new \PHPStan\Type\Constant\ConstantStringType('schemaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CSVRecords'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listDatabases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Databases'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSchemas(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Schemas'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStatements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Statements'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsBatchStatement'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PICKED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Tables'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}