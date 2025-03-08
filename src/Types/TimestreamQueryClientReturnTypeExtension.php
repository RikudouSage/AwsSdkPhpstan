<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TimestreamQueryClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\TimestreamQuery\TimestreamQueryClient>
     */
    public function getClass(): string
    {
        return \Aws\TimestreamQuery\TimestreamQueryClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelQuery',
            'createScheduledQuery',
            'deleteScheduledQuery',
            'describeAccountSettings',
            'describeEndpoints',
            'describeScheduledQuery',
            'executeScheduledQuery',
            'listScheduledQueries',
            'listTagsForResource',
            'prepareQuery',
            'query',
            'tagResource',
            'untagResource',
            'updateAccountSettings',
            'updateScheduledQuery',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelQuery' => $this->cancelQuery(),
            'createScheduledQuery' => $this->createScheduledQuery(),
            'deleteScheduledQuery' => $this->deleteScheduledQuery(),
            'describeAccountSettings' => $this->describeAccountSettings(),
            'describeEndpoints' => $this->describeEndpoints(),
            'describeScheduledQuery' => $this->describeScheduledQuery(),
            'executeScheduledQuery' => $this->executeScheduledQuery(),
            'listScheduledQueries' => $this->listScheduledQueries(),
            'listTagsForResource' => $this->listTagsForResource(),
            'prepareQuery' => $this->prepareQuery(),
            'query' => $this->query(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccountSettings' => $this->updateAccountSettings(),
            'updateScheduledQuery' => $this->updateScheduledQuery(),
        };
    }
    private function cancelQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CancellationMessage'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createScheduledQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteScheduledQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MaxQueryTCU'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryPricingModel'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryCompute'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BYTES_SCANNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_UNITS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedCapacity'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveQueryTCU'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnsConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetQueryTCU'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('CachePeriodInMinutes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeScheduledQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledQuery'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousInvocationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextInvocationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduleConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ScheduledQueryExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReportConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecentlyFailedRuns'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduleExpression'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SnsConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimestreamConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TimeColumn'),
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('MixedMeasureMappings'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeasureNameColumn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('DimensionValueType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetMultiMeasureName'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureAttributeMappings'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceColumn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetMultiMeasureAttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
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
                                    new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MULTI'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SourceColumn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TargetMultiMeasureAttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggerTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionStats'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryInsightsResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorReportLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TRIGGER_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TRIGGER_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_TRIGGER_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_TRIGGER_FAILURE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionTimeInMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataWrites'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesMetered'),
                            new \PHPStan\Type\Constant\ConstantStringType('CumulativeBytesScanned'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordsIngested'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryResultRows'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QuerySpatialCoverage'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryTemporalRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryTableCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputRows'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputBytes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PartitionKey'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3ReportLocation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectKey'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('TriggerTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExecutionStats'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryInsightsResponse'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorReportLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TRIGGER_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_TRIGGER_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_TRIGGER_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_TRIGGER_FAILURE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionTimeInMillis'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataWrites'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesMetered'),
                            new \PHPStan\Type\Constant\ConstantStringType('CumulativeBytesScanned'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordsIngested'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryResultRows'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QuerySpatialCoverage'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryTemporalRange'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryTableCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputRows'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputBytes'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PartitionKey'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Max'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3ReportLocation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ObjectKey'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function executeScheduledQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function listScheduledQueries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ScheduledQueries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('PreviousInvocationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextInvocationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorReportConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3Configuration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectKeyPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionOption'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_S3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSE_KMS'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimestreamDestination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_TRIGGER_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_TRIGGER_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_TRIGGER_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL_TRIGGER_FAILURE'),
                    ]),
                ]),
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
    private function prepareQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                new \PHPStan\Type\Constant\ConstantStringType('Columns'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Aliased'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScalarType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArrayColumnInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesMeasureValueColumnInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowColumnInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVAL_DAY_TO_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVAL_YEAR_TO_MONTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScalarType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArrayColumnInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesMeasureValueColumnInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowColumnInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVAL_DAY_TO_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVAL_YEAR_TO_MONTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function query(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Rows'),
                new \PHPStan\Type\Constant\ConstantStringType('ColumnInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryInsightsResponse'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Data'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScalarValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArrayValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('NullValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScalarType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArrayColumnInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeSeriesMeasureValueColumnInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('RowColumnInfo'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIME'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVAL_DAY_TO_SECOND'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERVAL_YEAR_TO_MONTH'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGER'),
                        ]),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\MixedType(),
                        new \PHPStan\Type\MixedType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProgressPercentage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CumulativeBytesScanned'),
                    new \PHPStan\Type\Constant\ConstantStringType('CumulativeBytesMetered'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('QuerySpatialCoverage'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryTemporalRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryTableCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputRows'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnloadPartitionCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnloadWrittenRows'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnloadWrittenBytes'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('PartitionKey'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Max'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
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
    private function updateAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MaxQueryTCU'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryPricingModel'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryCompute'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BYTES_SCANNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPUTE_UNITS'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedCapacity'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveQueryTCU'),
                        new \PHPStan\Type\Constant\ConstantStringType('NotificationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnsConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetQueryTCU'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateScheduledQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}