<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TimestreamWriteClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\TimestreamWrite\TimestreamWriteClient>
     */
    public function getClass(): string
    {
        return \Aws\TimestreamWrite\TimestreamWriteClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createBatchLoadTask',
            'createDatabase',
            'createTable',
            'deleteDatabase',
            'deleteTable',
            'describeBatchLoadTask',
            'describeDatabase',
            'describeEndpoints',
            'describeTable',
            'listBatchLoadTasks',
            'listDatabases',
            'listTables',
            'listTagsForResource',
            'resumeBatchLoadTask',
            'tagResource',
            'untagResource',
            'updateDatabase',
            'updateTable',
            'writeRecords',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createBatchLoadTask' => $this->createBatchLoadTask(),
            'createDatabase' => $this->createDatabase(),
            'createTable' => $this->createTable(),
            'deleteDatabase' => $this->deleteDatabase(),
            'deleteTable' => $this->deleteTable(),
            'describeBatchLoadTask' => $this->describeBatchLoadTask(),
            'describeDatabase' => $this->describeDatabase(),
            'describeEndpoints' => $this->describeEndpoints(),
            'describeTable' => $this->describeTable(),
            'listBatchLoadTasks' => $this->listBatchLoadTasks(),
            'listDatabases' => $this->listDatabases(),
            'listTables' => $this->listTables(),
            'listTagsForResource' => $this->listTagsForResource(),
            'resumeBatchLoadTask' => $this->resumeBatchLoadTask(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDatabase' => $this->updateDatabase(),
            'updateTable' => $this->updateTable(),
            'writeRecords' => $this->writeRecords(),
        };
    }
    private function createBatchLoadTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Table'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreWriteProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryStoreRetentionPeriodInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRetentionPeriodInDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableMagneticStoreWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRejectedDataLocation'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompositePartitionKey'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnforcementInRecord'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DIMENSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEASURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeBatchLoadTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BatchLoadTaskDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSourceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressReport'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataModelConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetDatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetTableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResumableUntil'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSourceS3Configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('CsvConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataFormat'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ColumnSeparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('EscapeChar'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuoteChar'),
                            new \PHPStan\Type\Constant\ConstantStringType('NullValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrimWhiteSpace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecordsProcessed'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecordsIngested'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParseFailures'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecordIngestionFailures'),
                        new \PHPStan\Type\Constant\ConstantStringType('FileFailures'),
                        new \PHPStan\Type\Constant\ConstantStringType('BytesMetered'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReportS3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataModel'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataModelS3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TimeColumn'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeUnit'),
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('MixedMeasureMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeasureNameColumn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MILLISECONDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECONDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MICROSECONDS'),
                                new \PHPStan\Type\Constant\ConstantStringType('NANOSECONDS'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SourceColumn'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationColumn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetMultiMeasureName'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureAttributeMappings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceColumn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetMultiMeasureAttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MeasureName'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceColumn'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetMeasureName'),
                                new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureAttributeMappings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceColumn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetMultiMeasureAttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                    ]),
                                ])),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROGRESS_STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_RESUME'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('CachePeriodInMinutes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function describeTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Table'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreWriteProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryStoreRetentionPeriodInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRetentionPeriodInDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableMagneticStoreWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRejectedDataLocation'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompositePartitionKey'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnforcementInRecord'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DIMENSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEASURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listBatchLoadTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('BatchLoadTasks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TaskStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResumableUntil'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROGRESS_STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_RESUME'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tables'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreWriteProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryStoreRetentionPeriodInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRetentionPeriodInDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableMagneticStoreWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRejectedDataLocation'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompositePartitionKey'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnforcementInRecord'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DIMENSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEASURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                            ]),
                        ])),
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
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function resumeBatchLoadTask(): ?\PHPStan\Type\Type
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
    private function updateDatabase(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Database'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateTable(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Table'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreWriteProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESTORING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MemoryStoreRetentionPeriodInHours'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRetentionPeriodInDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableMagneticStoreWrites'),
                        new \PHPStan\Type\Constant\ConstantStringType('MagneticStoreRejectedDataLocation'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompositePartitionKey'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnforcementInRecord'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DIMENSION'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEASURE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function writeRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordsIngested'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Total'),
                    new \PHPStan\Type\Constant\ConstantStringType('MemoryStore'),
                    new \PHPStan\Type\Constant\ConstantStringType('MagneticStore'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
}