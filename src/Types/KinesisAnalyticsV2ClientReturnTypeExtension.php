<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisAnalyticsV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\KinesisAnalyticsV2\KinesisAnalyticsV2Client>
     */
    public function getClass(): string
    {
        return \Aws\KinesisAnalyticsV2\KinesisAnalyticsV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addApplicationCloudWatchLoggingOption',
            'addApplicationInput',
            'addApplicationInputProcessingConfiguration',
            'addApplicationOutput',
            'addApplicationReferenceDataSource',
            'addApplicationVpcConfiguration',
            'createApplication',
            'createApplicationPresignedUrl',
            'createApplicationSnapshot',
            'deleteApplication',
            'deleteApplicationCloudWatchLoggingOption',
            'deleteApplicationInputProcessingConfiguration',
            'deleteApplicationOutput',
            'deleteApplicationReferenceDataSource',
            'deleteApplicationSnapshot',
            'deleteApplicationVpcConfiguration',
            'describeApplication',
            'describeApplicationOperation',
            'describeApplicationSnapshot',
            'describeApplicationVersion',
            'discoverInputSchema',
            'listApplicationOperations',
            'listApplicationSnapshots',
            'listApplicationVersions',
            'listApplications',
            'listTagsForResource',
            'rollbackApplication',
            'startApplication',
            'stopApplication',
            'tagResource',
            'untagResource',
            'updateApplication',
            'updateApplicationMaintenanceConfiguration',
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
            'addApplicationVpcConfiguration' => $this->addApplicationVpcConfiguration(),
            'createApplication' => $this->createApplication(),
            'createApplicationPresignedUrl' => $this->createApplicationPresignedUrl(),
            'createApplicationSnapshot' => $this->createApplicationSnapshot(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteApplicationCloudWatchLoggingOption' => $this->deleteApplicationCloudWatchLoggingOption(),
            'deleteApplicationInputProcessingConfiguration' => $this->deleteApplicationInputProcessingConfiguration(),
            'deleteApplicationOutput' => $this->deleteApplicationOutput(),
            'deleteApplicationReferenceDataSource' => $this->deleteApplicationReferenceDataSource(),
            'deleteApplicationSnapshot' => $this->deleteApplicationSnapshot(),
            'deleteApplicationVpcConfiguration' => $this->deleteApplicationVpcConfiguration(),
            'describeApplication' => $this->describeApplication(),
            'describeApplicationOperation' => $this->describeApplicationOperation(),
            'describeApplicationSnapshot' => $this->describeApplicationSnapshot(),
            'describeApplicationVersion' => $this->describeApplicationVersion(),
            'discoverInputSchema' => $this->discoverInputSchema(),
            'listApplicationOperations' => $this->listApplicationOperations(),
            'listApplicationSnapshots' => $this->listApplicationSnapshots(),
            'listApplicationVersions' => $this->listApplicationVersions(),
            'listApplications' => $this->listApplications(),
            'listTagsForResource' => $this->listTagsForResource(),
            'rollbackApplication' => $this->rollbackApplication(),
            'startApplication' => $this->startApplication(),
            'stopApplication' => $this->stopApplication(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApplication' => $this->updateApplication(),
            'updateApplicationMaintenanceConfiguration' => $this->updateApplicationMaintenanceConfiguration(),
        };
    }
    private function addApplicationCloudWatchLoggingOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
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
            ]),
        ]);
    }
    private function addApplicationInput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
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
            ]),
        ]);
    }
    private function addApplicationInputProcessingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('InputId'),
                new \PHPStan\Type\Constant\ConstantStringType('InputProcessingConfigurationDescription'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
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
            ]),
        ]);
    }
    private function addApplicationOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
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
            ]),
        ]);
    }
    private function addApplicationReferenceDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
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
            ]),
        ]);
    }
    private function addApplicationVpcConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionCreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConditionalToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SqlApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationCodeConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlinkApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentPropertyDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSnapshotConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSystemRollbackConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZeppelinApplicationConfigurationDescription'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
                        ], [
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
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentDescription'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIPFILE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TextContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeMD5'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ApplicationCodeLocationDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlinkRunConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP_RESTORE_FROM_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_LATEST_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_CUSTOM_SNAPSHOT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowNonRestoredState'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CheckpointConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParallelismConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobPlanDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointingEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinPauseBetweenCheckpoints'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricsLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARALLELISM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParallelismPerKPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentParallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingEnabled'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupDescriptions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyMap'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeployAsApplicationConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomArtifactsConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueDataCatalogConfigurationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BasePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactType'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('MavenReferenceDescription'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UDF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_JAR'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createApplicationPresignedUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizedUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createApplicationSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
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
            ]),
        ]);
    }
    private function deleteApplicationInputProcessingConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteApplicationOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteApplicationReferenceDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteApplicationSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApplicationVpcConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionCreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConditionalToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SqlApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationCodeConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlinkApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentPropertyDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSnapshotConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSystemRollbackConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZeppelinApplicationConfigurationDescription'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
                        ], [
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
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentDescription'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIPFILE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TextContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeMD5'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ApplicationCodeLocationDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlinkRunConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP_RESTORE_FROM_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_LATEST_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_CUSTOM_SNAPSHOT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowNonRestoredState'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CheckpointConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParallelismConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobPlanDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointingEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinPauseBetweenCheckpoints'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricsLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARALLELISM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParallelismPerKPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentParallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingEnabled'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupDescriptions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyMap'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeployAsApplicationConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomArtifactsConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueDataCatalogConfigurationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BasePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactType'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('MavenReferenceDescription'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UDF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_JAR'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeApplicationOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationOperationInfoDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionChangeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationFailureDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedFrom'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedTo'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackOperationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorInfo'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorString'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeApplicationSnapshot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeApplicationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionCreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConditionalToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SqlApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationCodeConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlinkApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentPropertyDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSnapshotConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSystemRollbackConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZeppelinApplicationConfigurationDescription'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
                        ], [
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
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentDescription'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIPFILE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TextContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeMD5'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ApplicationCodeLocationDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlinkRunConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP_RESTORE_FROM_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_LATEST_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_CUSTOM_SNAPSHOT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowNonRestoredState'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CheckpointConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParallelismConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobPlanDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointingEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinPauseBetweenCheckpoints'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricsLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARALLELISM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParallelismPerKPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentParallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingEnabled'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupDescriptions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyMap'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeployAsApplicationConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomArtifactsConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueDataCatalogConfigurationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BasePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactType'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('MavenReferenceDescription'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UDF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_JAR'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                    ]),
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
    private function listApplicationOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationOperationInfoList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESSFUL'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationSnapshots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SnapshotSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotCreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplicationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMode'),
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
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
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
    private function rollbackApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionCreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConditionalToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SqlApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationCodeConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlinkApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentPropertyDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSnapshotConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSystemRollbackConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZeppelinApplicationConfigurationDescription'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
                        ], [
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
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentDescription'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIPFILE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TextContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeMD5'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ApplicationCodeLocationDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlinkRunConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP_RESTORE_FROM_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_LATEST_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_CUSTOM_SNAPSHOT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowNonRestoredState'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CheckpointConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParallelismConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobPlanDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointingEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinPauseBetweenCheckpoints'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricsLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARALLELISM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParallelismPerKPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentParallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingEnabled'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupDescriptions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyMap'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeployAsApplicationConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomArtifactsConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueDataCatalogConfigurationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BasePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactType'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('MavenReferenceDescription'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UDF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_JAR'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RuntimeEnvironment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceExecutionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionDescriptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceConfigurationDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionUpdatedFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackFrom'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionCreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConditionalToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationVersionRolledBackTo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SQL-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_6'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_8'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_11'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_13'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-2_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_15'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZEPPELIN-FLINK-3_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_18'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_19'),
                        new \PHPStan\Type\Constant\ConstantStringType('FLINK-1_20'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOSCALING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLING_BACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAINTENANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLED_BACK'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SqlApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationCodeConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RunConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlinkApplicationConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnvironmentPropertyDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSnapshotConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationSystemRollbackConfigurationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescriptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZeppelinApplicationConfigurationDescription'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputDescriptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferenceDataSourceDescriptions'),
                        ], [
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
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentType'),
                            new \PHPStan\Type\Constant\ConstantStringType('CodeContentDescription'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PLAINTEXT'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIPFILE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TextContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeMD5'),
                                new \PHPStan\Type\Constant\ConstantStringType('CodeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ApplicationCodeLocationDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlinkRunConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApplicationRestoreType'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnapshotName'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SKIP_RESTORE_FROM_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_LATEST_SNAPSHOT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESTORE_FROM_CUSTOM_SNAPSHOT'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AllowNonRestoredState'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CheckpointConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ParallelismConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('JobPlanDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointingEnabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('CheckpointInterval'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinPauseBetweenCheckpoints'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MetricsLevel'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TASK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPERATOR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PARALLELISM'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParallelismPerKPU'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentParallelism'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingEnabled'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupDescriptions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyGroupId'),
                                new \PHPStan\Type\Constant\ConstantStringType('PropertyMap'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotsEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MonitoringConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeployAsApplicationConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomArtifactsConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LogLevel'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GlueDataCatalogConfigurationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BasePath'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactType'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ContentLocationDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('MavenReferenceDescription'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UDF'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPENDENCY_JAR'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FileKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ObjectVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GroupId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ArtifactId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowEndTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STREAMING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERACTIVE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateApplicationMaintenanceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceConfigurationDescription'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationMaintenanceWindowEndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}