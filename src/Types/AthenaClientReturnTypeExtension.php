<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AthenaClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Athena\AthenaClient>
     */
    public function getClass(): string
    {
        return \Aws\Athena\AthenaClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetNamedQuery',
            'batchGetPreparedStatement',
            'batchGetQueryExecution',
            'cancelCapacityReservation',
            'createCapacityReservation',
            'createDataCatalog',
            'createNamedQuery',
            'createNotebook',
            'createPreparedStatement',
            'createPresignedNotebookUrl',
            'createWorkGroup',
            'deleteCapacityReservation',
            'deleteDataCatalog',
            'deleteNamedQuery',
            'deleteNotebook',
            'deletePreparedStatement',
            'deleteWorkGroup',
            'exportNotebook',
            'getCalculationExecution',
            'getCalculationExecutionCode',
            'getCalculationExecutionStatus',
            'getCapacityAssignmentConfiguration',
            'getCapacityReservation',
            'getDataCatalog',
            'getDatabase',
            'getNamedQuery',
            'getNotebookMetadata',
            'getPreparedStatement',
            'getQueryExecution',
            'getQueryResults',
            'getQueryRuntimeStatistics',
            'getSession',
            'getSessionStatus',
            'getTableMetadata',
            'getWorkGroup',
            'importNotebook',
            'listApplicationDPUSizes',
            'listCalculationExecutions',
            'listCapacityReservations',
            'listDataCatalogs',
            'listDatabases',
            'listEngineVersions',
            'listExecutors',
            'listNamedQueries',
            'listNotebookMetadata',
            'listNotebookSessions',
            'listPreparedStatements',
            'listQueryExecutions',
            'listSessions',
            'listTableMetadata',
            'listTagsForResource',
            'listWorkGroups',
            'putCapacityAssignmentConfiguration',
            'startCalculationExecution',
            'startQueryExecution',
            'startSession',
            'stopCalculationExecution',
            'stopQueryExecution',
            'tagResource',
            'terminateSession',
            'untagResource',
            'updateCapacityReservation',
            'updateDataCatalog',
            'updateNamedQuery',
            'updateNotebook',
            'updateNotebookMetadata',
            'updatePreparedStatement',
            'updateWorkGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetNamedQuery' => $this->batchGetNamedQuery(),
            'batchGetPreparedStatement' => $this->batchGetPreparedStatement(),
            'batchGetQueryExecution' => $this->batchGetQueryExecution(),
            'cancelCapacityReservation' => $this->cancelCapacityReservation(),
            'createCapacityReservation' => $this->createCapacityReservation(),
            'createDataCatalog' => $this->createDataCatalog(),
            'createNamedQuery' => $this->createNamedQuery(),
            'createNotebook' => $this->createNotebook(),
            'createPreparedStatement' => $this->createPreparedStatement(),
            'createPresignedNotebookUrl' => $this->createPresignedNotebookUrl(),
            'createWorkGroup' => $this->createWorkGroup(),
            'deleteCapacityReservation' => $this->deleteCapacityReservation(),
            'deleteDataCatalog' => $this->deleteDataCatalog(),
            'deleteNamedQuery' => $this->deleteNamedQuery(),
            'deleteNotebook' => $this->deleteNotebook(),
            'deletePreparedStatement' => $this->deletePreparedStatement(),
            'deleteWorkGroup' => $this->deleteWorkGroup(),
            'exportNotebook' => $this->exportNotebook(),
            'getCalculationExecution' => $this->getCalculationExecution(),
            'getCalculationExecutionCode' => $this->getCalculationExecutionCode(),
            'getCalculationExecutionStatus' => $this->getCalculationExecutionStatus(),
            'getCapacityAssignmentConfiguration' => $this->getCapacityAssignmentConfiguration(),
            'getCapacityReservation' => $this->getCapacityReservation(),
            'getDataCatalog' => $this->getDataCatalog(),
            'getDatabase' => $this->getDatabase(),
            'getNamedQuery' => $this->getNamedQuery(),
            'getNotebookMetadata' => $this->getNotebookMetadata(),
            'getPreparedStatement' => $this->getPreparedStatement(),
            'getQueryExecution' => $this->getQueryExecution(),
            'getQueryResults' => $this->getQueryResults(),
            'getQueryRuntimeStatistics' => $this->getQueryRuntimeStatistics(),
            'getSession' => $this->getSession(),
            'getSessionStatus' => $this->getSessionStatus(),
            'getTableMetadata' => $this->getTableMetadata(),
            'getWorkGroup' => $this->getWorkGroup(),
            'importNotebook' => $this->importNotebook(),
            'listApplicationDPUSizes' => $this->listApplicationDPUSizes(),
            'listCalculationExecutions' => $this->listCalculationExecutions(),
            'listCapacityReservations' => $this->listCapacityReservations(),
            'listDataCatalogs' => $this->listDataCatalogs(),
            'listDatabases' => $this->listDatabases(),
            'listEngineVersions' => $this->listEngineVersions(),
            'listExecutors' => $this->listExecutors(),
            'listNamedQueries' => $this->listNamedQueries(),
            'listNotebookMetadata' => $this->listNotebookMetadata(),
            'listNotebookSessions' => $this->listNotebookSessions(),
            'listPreparedStatements' => $this->listPreparedStatements(),
            'listQueryExecutions' => $this->listQueryExecutions(),
            'listSessions' => $this->listSessions(),
            'listTableMetadata' => $this->listTableMetadata(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWorkGroups' => $this->listWorkGroups(),
            'putCapacityAssignmentConfiguration' => $this->putCapacityAssignmentConfiguration(),
            'startCalculationExecution' => $this->startCalculationExecution(),
            'startQueryExecution' => $this->startQueryExecution(),
            'startSession' => $this->startSession(),
            'stopCalculationExecution' => $this->stopCalculationExecution(),
            'stopQueryExecution' => $this->stopQueryExecution(),
            'tagResource' => $this->tagResource(),
            'terminateSession' => $this->terminateSession(),
            'untagResource' => $this->untagResource(),
            'updateCapacityReservation' => $this->updateCapacityReservation(),
            'updateDataCatalog' => $this->updateDataCatalog(),
            'updateNamedQuery' => $this->updateNamedQuery(),
            'updateNotebook' => $this->updateNotebook(),
            'updateNotebookMetadata' => $this->updateNotebookMetadata(),
            'updatePreparedStatement' => $this->updatePreparedStatement(),
            'updateWorkGroup' => $this->updateWorkGroup(),
        };
    }
    private function batchGetNamedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NamedQueries'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedNamedQueryIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Database'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                    new \PHPStan\Type\Constant\ConstantStringType('NamedQueryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NamedQueryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetPreparedStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PreparedStatements'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedPreparedStatementNames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchGetQueryExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedQueryExecutionIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultReuseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubstatementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryResultsS3AccessGrantsConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DML'),
                        new \PHPStan\Type\Constant\ConstantStringType('UTILITY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedBucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('AclConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CSE_KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3AclOption'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_OWNER_FULL_CONTROL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResultReuseByAgeConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAgeInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmissionDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AthenaError'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCategory'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retryable'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EngineExecutionTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataScannedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataManifestLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalExecutionTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryQueueTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePreProcessingTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryPlanningTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceProcessingTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResultReuseInformation'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReusedPreviousResult'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('EffectiveEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableS3AccessGrants'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateUserLevelPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_IDENTITY'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDataCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataCatalog'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNAPSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOOGLECLOUDSTORAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('CMDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TPCDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATALAKEGEN2'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2AS400'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createNamedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NamedQueryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createNotebook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPreparedStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createPresignedNotebookUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthTokenExpirationTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createWorkGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataCatalog'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNAPSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOOGLECLOUDSTORAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('CMDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TPCDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATALAKEGEN2'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2AS400'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteNamedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNotebook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePreparedStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteWorkGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function exportNotebook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookMetadata'),
                new \PHPStan\Type\Constant\ConstantStringType('Payload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPYNB'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCalculationExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculationExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                new \PHPStan\Type\Constant\ConstantStringType('Result'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubmissionDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DpuExecutionInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StdOutS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('StdErrorS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultS3Uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCalculationExecutionCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CodeBlock'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCalculationExecutionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SubmissionDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DpuExecutionInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCapacityAssignmentConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CapacityAssignmentConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityAssignments'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('WorkGroupNames'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CapacityReservation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetDpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedDpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAllocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulAllocationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestCompletionTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getDataCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataCatalog'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNAPSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOOGLECLOUDSTORAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('CMDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TPCDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATALAKEGEN2'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2AS400'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getNamedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NamedQuery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Database'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                    new \PHPStan\Type\Constant\ConstantStringType('NamedQueryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getNotebookMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPYNB'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getPreparedStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PreparedStatement'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStatement'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getQueryExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryExecution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultReuseConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubstatementType'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryResultsS3AccessGrantsConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DML'),
                        new \PHPStan\Type\Constant\ConstantStringType('UTILITY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedBucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('AclConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                new \PHPStan\Type\Constant\ConstantStringType('CSE_KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3AclOption'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_OWNER_FULL_CONTROL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResultReuseByAgeConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxAgeInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Catalog'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubmissionDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('AthenaError'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCategory'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retryable'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EngineExecutionTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataScannedInBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataManifestLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalExecutionTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryQueueTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePreProcessingTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryPlanningTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceProcessingTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResultReuseInformation'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ReusedPreviousResult'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('EffectiveEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableS3AccessGrants'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateUserLevelPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_IDENTITY'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getQueryResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpdateCount'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultSet'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Rows'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultSetMetadata'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Data'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VarCharValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ColumnInfo'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SchemaName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Precision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scale'),
                            new \PHPStan\Type\Constant\ConstantStringType('Nullable'),
                            new \PHPStan\Type\Constant\ConstantStringType('CaseSensitive'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_NULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('NULLABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQueryRuntimeStatistics(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryRuntimeStatistics'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Timeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rows'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputStage'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QueryQueueTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePreProcessingTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryPlanningTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineExecutionTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceProcessingTimeInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalExecutionTimeInMillis'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputRows'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputRows'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputRows'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputRows'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStagePlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubStages'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('Children'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteSources'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('EngineConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('NotebookVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Statistics'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoordinatorDpuSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentDpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultExecutorDpuSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('SparkProperties'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkingDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdleTimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSE_KMS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdleSinceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DpuExecutionInMillis'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getSessionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdleSinceDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTableMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableMetadata'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAccessTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Columns'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartitionKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getWorkGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResultConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceWorkGroupConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublishCloudWatchMetricsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('BytesScannedCutoffPerQuery'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequesterPaysEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerContentEncryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableMinimumEncryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryResultsS3AccessGrantsConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpectedBucketOwner'),
                            new \PHPStan\Type\Constant\ConstantStringType('AclConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CSE_KMS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3AclOption'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('BUCKET_OWNER_FULL_CONTROL'),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SelectedEngineVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EffectiveEngineVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnableIdentityCenter'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterInstanceArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnableS3AccessGrants'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateUserLevelPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationType'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECTORY_IDENTITY'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function importNotebook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationDPUSizes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationDPUSizes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationRuntimeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedDPUSizes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCalculationExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Calculations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CalculationExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SubmissionDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCapacityReservations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityReservations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetDpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllocatedDpus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAllocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulAllocationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestCompletionTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listDataCatalogs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataCatalogsSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CatalogName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FEDERATED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('MYSQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTGRESQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORACLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYNAPSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SQLSERVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('BIGQUERY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GOOGLECLOUDSTORAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HBASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCUMENTDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('CMDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TPCDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAPHANA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOWFLAKE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATALAKEGEN2'),
                        new \PHPStan\Type\Constant\ConstantStringType('DB2AS400'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDatabases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DatabaseList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEngineVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EngineVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SelectedEngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveEngineVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExecutors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutorsSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutorType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TerminationDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutorState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutorSize'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COORDINATOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKER'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listNamedQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NamedQueryIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNotebookMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NotebookMetadataList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('WorkGroup'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPYNB'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listNotebookSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NotebookSessionsList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPreparedStatements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PreparedStatements'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueryExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSessions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Sessions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotebookVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('EffectiveEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdleSinceDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('StateChangeReason'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTableMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TableMetadataList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastAccessTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Columns'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartitionKeys'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('WorkGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityCenterApplicationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SelectedEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('EffectiveEngineVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putCapacityAssignmentConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startCalculationExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculationExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function startQueryExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function stopCalculationExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function stopQueryExecution(): ?\PHPStan\Type\Type
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
    private function terminateSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BUSY'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDataCatalog(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNamedQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNotebook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateNotebookMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updatePreparedStatement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateWorkGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}