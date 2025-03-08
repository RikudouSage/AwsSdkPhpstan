<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class FirehoseClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Firehose\FirehoseClient>
     */
    public function getClass(): string
    {
        return \Aws\Firehose\FirehoseClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createDeliveryStream',
            'deleteDeliveryStream',
            'describeDeliveryStream',
            'listDeliveryStreams',
            'listTagsForDeliveryStream',
            'putRecord',
            'putRecordBatch',
            'startDeliveryStreamEncryption',
            'stopDeliveryStreamEncryption',
            'tagDeliveryStream',
            'untagDeliveryStream',
            'updateDestination',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createDeliveryStream' => $this->createDeliveryStream(),
            'deleteDeliveryStream' => $this->deleteDeliveryStream(),
            'describeDeliveryStream' => $this->describeDeliveryStream(),
            'listDeliveryStreams' => $this->listDeliveryStreams(),
            'listTagsForDeliveryStream' => $this->listTagsForDeliveryStream(),
            'putRecord' => $this->putRecord(),
            'putRecordBatch' => $this->putRecordBatch(),
            'startDeliveryStreamEncryption' => $this->startDeliveryStreamEncryption(),
            'stopDeliveryStreamEncryption' => $this->stopDeliveryStreamEncryption(),
            'tagDeliveryStream' => $this->tagDeliveryStream(),
            'untagDeliveryStream' => $this->untagDeliveryStream(),
            'updateDestination' => $this->updateDestination(),
        };
    }
    private function createDeliveryStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamARN'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDeliveryStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeDeliveryStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamEncryptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdateTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasMoreDestinations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_NAME_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_INTERFACE_ENDPOINT_SERVICE_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETIRE_KMS_GRANT_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_KMS_GRANT_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_KMS_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_KMS_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_KEY_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMS_OPT_IN_REQUIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_ENI_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_ENI_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENI_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_OWNED_CMK'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED_CMK'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING_FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_NAME_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_INTERFACE_ENDPOINT_SERVICE_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('RETIRE_KMS_GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_KMS_GRANT_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_KMS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_KMS_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS_KEY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMS_OPT_IN_REQUIRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATE_ENI_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE_ENI_FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENI_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_ACCESS_DENIED'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectPut'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamAsSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('MSKAsSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseAsSource'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DirectPutSourceDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamSourceDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('MSKSourceDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('DatabaseSourceDescription'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ThroughputHintInMBs'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryStartTimestamp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MSKClusterARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryStartTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadFromTimestamp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Connectivity'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                                ]),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Databases'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tables'),
                            new \PHPStan\Type\Constant\ConstantStringType('Columns'),
                            new \PHPStan\Type\Constant\ConstantStringType('SurrogateKeys'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotWatermarkTable'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnapshotInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseSourceAuthenticationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('DatabaseSourceVPCConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MySQL'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostgreSQL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Include'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Include'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Include'),
                                new \PHPStan\Type\Constant\ConstantStringType('Exclude'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Table'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestTimestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestedBy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailureDescription'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FIREHOSE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_NAME_NOT_FOUND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VPC_INTERFACE_ENDPOINT_SERVICE_ACCESS_DENIED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RETIRE_KMS_GRANT_FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_KMS_GRANT_FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KMS_ACCESS_DENIED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED_KMS_KEY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_KMS_KEY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KMS_KEY_NOT_FOUND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KMS_OPT_IN_REQUIRED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_ENI_FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_ENI_FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_NOT_FOUND'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ENI_ACCESS_DENIED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET_ACCESS_DENIED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP_ACCESS_DENIED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN_ERROR'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerConfiguration'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointServiceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendedS3DestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedshiftDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonopensearchserviceDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SplunkDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpEndpointDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SnowflakeDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('AmazonOpenSearchServerlessDestinationDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('IcebergDestinationDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataFormatConversionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('DynamicPartitioningConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('FileExtension'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomTimeZone'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SchemaConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputFormatConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutputFormatConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DatabaseName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Deserializer'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OpenXJsonSerDe'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HiveJsonSerDe'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ConvertDotsInJsonKeysToUnderscores'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CaseInsensitive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ColumnToJsonKeyMappings'),
                                        ], [
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TimestampFormats'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Serializer'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParquetSerDe'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OrcSerDe'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('BlockSizeBytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PageSizeBytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Compression'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EnableDictionaryCompression'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MaxPaddingBytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('WriterVersion'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                                new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('V1'),
                                                new \PHPStan\Type\Constant\ConstantStringType('V2'),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('StripeSizeBytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BlockSizeBytes'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RowIndexStride'),
                                            new \PHPStan\Type\Constant\ConstantStringType('EnablePadding'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PaddingTolerance'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Compression'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BloomFilterColumns'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BloomFilterFalsePositiveProbability'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DictionaryKeyThreshold'),
                                            new \PHPStan\Type\Constant\ConstantStringType('FormatVersion'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ZLIB'),
                                                new \PHPStan\Type\Constant\ConstantStringType('SNAPPY'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('V0_11'),
                                                new \PHPStan\Type\Constant\ConstantStringType('V0_12'),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterJDBCURL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CopyCommand'),
                            new \PHPStan\Type\Constant\ConstantStringType('Username'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataTableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataTableColumns'),
                                new \PHPStan\Type\Constant\ConstantStringType('CopyOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecretARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DomainARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexRotationPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentIdOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NoRotation'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneWeek'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneMonth'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedDocumentsOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllDocuments'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultDocumentIdFormat'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FIREHOSE_DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_DOCUMENT_ID'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('DomainARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexRotationPeriod'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('DocumentIdOptions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NoRotation'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneHour'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneWeek'),
                                new \PHPStan\Type\Constant\ConstantStringType('OneMonth'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedDocumentsOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllDocuments'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultDocumentIdFormat'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FIREHOSE_DEFAULT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_DOCUMENT_ID'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HECEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('HECEndpointType'),
                            new \PHPStan\Type\Constant\ConstantStringType('HECToken'),
                            new \PHPStan\Type\Constant\ConstantStringType('HECAcknowledgmentTimeoutInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedEventsOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllEvents'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecretARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContentEncoding'),
                                new \PHPStan\Type\Constant\ConstantStringType('CommonAttributes'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AttributeValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedDataOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllData'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecretARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('User'),
                            new \PHPStan\Type\Constant\ConstantStringType('Database'),
                            new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                            new \PHPStan\Type\Constant\ConstantStringType('Table'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnowflakeRoleConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataLoadingOption'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetaDataColumnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentColumnName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SnowflakeVpcConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('SnowflakeRole'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JSON_MAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VARIANT_CONTENT_MAPPING'),
                                new \PHPStan\Type\Constant\ConstantStringType('VARIANT_CONTENT_AND_METADATA_MAPPING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PrivateLinkVpceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedDataOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllData'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SecretARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('CollectionEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcConfigurationDescription'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedDocumentsOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllDocuments'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationTableConfigurationList'),
                            new \PHPStan\Type\Constant\ConstantStringType('SchemaEvolutionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableCreationConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProcessingConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3BackupMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('RetryOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppendOnly'),
                            new \PHPStan\Type\Constant\ConstantStringType('CatalogConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DestinationDescription'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationTableName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationDatabaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('UniqueKeys'),
                                new \PHPStan\Type\Constant\ConstantStringType('PartitionSpec'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3ErrorOutputPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Identity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processors'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RecordDeAggregation'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Decompression'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogProcessing'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MetadataExtraction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AppendDelimiterToRecord'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LambdaArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('NumberOfRetries'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MetadataExtractionQuery'),
                                            new \PHPStan\Type\Constant\ConstantStringType('JsonParsingEngine'),
                                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferSizeInMBs'),
                                            new \PHPStan\Type\Constant\ConstantStringType('BufferIntervalInSeconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SubRecordType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DataMessageExtraction'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FailedDataOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllData'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DurationInSeconds'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('WarehouseLocation'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('BucketARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorOutputPrefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('BufferingHints'),
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLoggingOptions'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SizeInMBs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IntervalInSeconds'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNCOMPRESSED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Snappy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HADOOP_SNAPPY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryptionConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KMSEncryptionConfig'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('NoEncryption'),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AWSKMSKeyARN'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function listDeliveryStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamNames'),
                new \PHPStan\Type\Constant\ConstantStringType('HasMoreDeliveryStreams'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function listTagsForDeliveryStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('HasMoreTags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function putRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function putRecordBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedPutCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Encrypted'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestResponses'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startDeliveryStreamEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function stopDeliveryStreamEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function tagDeliveryStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function untagDeliveryStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateDestination(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}