<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisAnalyticsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\KinesisAnalytics\KinesisAnalyticsClient>
     */
    public function getClass(): string
    {
        return \Aws\KinesisAnalytics\KinesisAnalyticsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addApplicationCloudWatchLoggingOption',
            'addApplicationInput',
            'addApplicationInputProcessingConfiguration',
            'addApplicationOutput',
            'addApplicationReferenceDataSource',
            'createApplication',
            'deleteApplication',
            'deleteApplicationCloudWatchLoggingOption',
            'deleteApplicationInputProcessingConfiguration',
            'deleteApplicationOutput',
            'deleteApplicationReferenceDataSource',
            'describeApplication',
            'discoverInputSchema',
            'listApplications',
            'listTagsForResource',
            'startApplication',
            'stopApplication',
            'tagResource',
            'untagResource',
            'updateApplication',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addApplicationCloudWatchLoggingOption' => $this->addApplicationCloudWatchLoggingOption(),
            'addApplicationInput' => $this->addApplicationInput(),
            'addApplicationInputProcessingConfiguration' => $this->addApplicationInputProcessingConfiguration(),
            'addApplicationOutput' => $this->addApplicationOutput(),
            'addApplicationReferenceDataSource' => $this->addApplicationReferenceDataSource(),
            'createApplication' => $this->createApplication(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteApplicationCloudWatchLoggingOption' => $this->deleteApplicationCloudWatchLoggingOption(),
            'deleteApplicationInputProcessingConfiguration' => $this->deleteApplicationInputProcessingConfiguration(),
            'deleteApplicationOutput' => $this->deleteApplicationOutput(),
            'deleteApplicationReferenceDataSource' => $this->deleteApplicationReferenceDataSource(),
            'describeApplication' => $this->describeApplication(),
            'discoverInputSchema' => $this->discoverInputSchema(),
            'listApplications' => $this->listApplications(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startApplication' => $this->startApplication(),
            'stopApplication' => $this->stopApplication(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApplication' => $this->updateApplication(),
        };
    }
    private function addApplicationCloudWatchLoggingOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addApplicationInput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addApplicationInputProcessingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addApplicationOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addApplicationReferenceDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplicationCloudWatchLoggingOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplicationInputProcessingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplicationOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplicationReferenceDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NamePrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('InAppStreamNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputProcessingConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamsInputDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseInputDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputParallelism'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputStartingPositionConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputLambdaProcessorDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecordFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordEncoding'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordColumns'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecordFormatType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MappingParameters'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JSONMappingParameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CSVMappingParameters'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordRowPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordRowDelimiter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordColumnDelimiter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Mapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqlType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputStartingPosition'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                                new \PHPStan\Type\Constant\ConstantStringType('LAST_STOPPED_POINT'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamsOutputDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisFirehoseOutputDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaOutputDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationSchema'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecordFormatType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3ReferenceDataSourceDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferenceSchema'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceRoleARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecordFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordEncoding'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordColumns'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecordFormatType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MappingParameters'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('JSONMappingParameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CSVMappingParameters'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordRowPath'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordRowDelimiter'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordColumnDelimiter'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Mapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('SqlType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function discoverInputSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                new \PHPStan\Type\Constant\ConstantStringType('ParsedInputRecords'),
                new \PHPStan\Type\Constant\ConstantStringType('ProcessedInputRecords'),
                new \PHPStan\Type\Constant\ConstantStringType('RawInputRecords'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordFormat'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordEncoding'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordColumns'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecordFormatType'),
                        new \PHPStan\Type\Constant\ConstantStringType('MappingParameters'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('JSONMappingParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('CSVMappingParameters'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecordRowPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RecordRowDelimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecordColumnDelimiter'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mapping'),
                        new \PHPStan\Type\Constant\ConstantStringType('SqlType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('HasMoreApplications'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
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
    private function startApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopApplication(): ?\PHPStan\Type\Type
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
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}