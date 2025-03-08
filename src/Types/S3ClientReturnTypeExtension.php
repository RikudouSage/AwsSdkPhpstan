<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class S3ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\S3\S3Client>
     */
    public function getClass(): string
    {
        return \Aws\S3\S3Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'abortMultipartUpload',
            'completeMultipartUpload',
            'copyObject',
            'createBucket',
            'createBucketMetadataTableConfiguration',
            'createMultipartUpload',
            'createSession',
            'deleteBucket',
            'deleteBucketAnalyticsConfiguration',
            'deleteBucketCors',
            'deleteBucketEncryption',
            'deleteBucketIntelligentTieringConfiguration',
            'deleteBucketInventoryConfiguration',
            'deleteBucketLifecycle',
            'deleteBucketMetadataTableConfiguration',
            'deleteBucketMetricsConfiguration',
            'deleteBucketOwnershipControls',
            'deleteBucketPolicy',
            'deleteBucketReplication',
            'deleteBucketTagging',
            'deleteBucketWebsite',
            'deleteObject',
            'deleteObjectTagging',
            'deleteObjects',
            'deletePublicAccessBlock',
            'getBucketAccelerateConfiguration',
            'getBucketAcl',
            'getBucketAnalyticsConfiguration',
            'getBucketCors',
            'getBucketEncryption',
            'getBucketIntelligentTieringConfiguration',
            'getBucketInventoryConfiguration',
            'getBucketLifecycle',
            'getBucketLifecycleConfiguration',
            'getBucketLocation',
            'getBucketLogging',
            'getBucketMetadataTableConfiguration',
            'getBucketMetricsConfiguration',
            'getBucketNotification',
            'getBucketNotificationConfiguration',
            'getBucketOwnershipControls',
            'getBucketPolicy',
            'getBucketPolicyStatus',
            'getBucketReplication',
            'getBucketRequestPayment',
            'getBucketTagging',
            'getBucketVersioning',
            'getBucketWebsite',
            'getObject',
            'getObjectAcl',
            'getObjectAttributes',
            'getObjectLegalHold',
            'getObjectLockConfiguration',
            'getObjectRetention',
            'getObjectTagging',
            'getObjectTorrent',
            'getPublicAccessBlock',
            'headBucket',
            'headObject',
            'listBucketAnalyticsConfigurations',
            'listBucketIntelligentTieringConfigurations',
            'listBucketInventoryConfigurations',
            'listBucketMetricsConfigurations',
            'listBuckets',
            'listDirectoryBuckets',
            'listMultipartUploads',
            'listObjectVersions',
            'listObjects',
            'listObjectsV2',
            'listParts',
            'putBucketAccelerateConfiguration',
            'putBucketAcl',
            'putBucketAnalyticsConfiguration',
            'putBucketCors',
            'putBucketEncryption',
            'putBucketIntelligentTieringConfiguration',
            'putBucketInventoryConfiguration',
            'putBucketLifecycle',
            'putBucketLifecycleConfiguration',
            'putBucketLogging',
            'putBucketMetricsConfiguration',
            'putBucketNotification',
            'putBucketNotificationConfiguration',
            'putBucketOwnershipControls',
            'putBucketPolicy',
            'putBucketReplication',
            'putBucketRequestPayment',
            'putBucketTagging',
            'putBucketVersioning',
            'putBucketWebsite',
            'putObject',
            'putObjectAcl',
            'putObjectLegalHold',
            'putObjectLockConfiguration',
            'putObjectRetention',
            'putObjectTagging',
            'putPublicAccessBlock',
            'restoreObject',
            'selectObjectContent',
            'uploadPart',
            'uploadPartCopy',
            'writeGetObjectResponse',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'abortMultipartUpload' => $this->abortMultipartUpload(),
            'completeMultipartUpload' => $this->completeMultipartUpload(),
            'copyObject' => $this->copyObject(),
            'createBucket' => $this->createBucket(),
            'createBucketMetadataTableConfiguration' => $this->createBucketMetadataTableConfiguration(),
            'createMultipartUpload' => $this->createMultipartUpload(),
            'createSession' => $this->createSession(),
            'deleteBucket' => $this->deleteBucket(),
            'deleteBucketAnalyticsConfiguration' => $this->deleteBucketAnalyticsConfiguration(),
            'deleteBucketCors' => $this->deleteBucketCors(),
            'deleteBucketEncryption' => $this->deleteBucketEncryption(),
            'deleteBucketIntelligentTieringConfiguration' => $this->deleteBucketIntelligentTieringConfiguration(),
            'deleteBucketInventoryConfiguration' => $this->deleteBucketInventoryConfiguration(),
            'deleteBucketLifecycle' => $this->deleteBucketLifecycle(),
            'deleteBucketMetadataTableConfiguration' => $this->deleteBucketMetadataTableConfiguration(),
            'deleteBucketMetricsConfiguration' => $this->deleteBucketMetricsConfiguration(),
            'deleteBucketOwnershipControls' => $this->deleteBucketOwnershipControls(),
            'deleteBucketPolicy' => $this->deleteBucketPolicy(),
            'deleteBucketReplication' => $this->deleteBucketReplication(),
            'deleteBucketTagging' => $this->deleteBucketTagging(),
            'deleteBucketWebsite' => $this->deleteBucketWebsite(),
            'deleteObject' => $this->deleteObject(),
            'deleteObjectTagging' => $this->deleteObjectTagging(),
            'deleteObjects' => $this->deleteObjects(),
            'deletePublicAccessBlock' => $this->deletePublicAccessBlock(),
            'getBucketAccelerateConfiguration' => $this->getBucketAccelerateConfiguration(),
            'getBucketAcl' => $this->getBucketAcl(),
            'getBucketAnalyticsConfiguration' => $this->getBucketAnalyticsConfiguration(),
            'getBucketCors' => $this->getBucketCors(),
            'getBucketEncryption' => $this->getBucketEncryption(),
            'getBucketIntelligentTieringConfiguration' => $this->getBucketIntelligentTieringConfiguration(),
            'getBucketInventoryConfiguration' => $this->getBucketInventoryConfiguration(),
            'getBucketLifecycle' => $this->getBucketLifecycle(),
            'getBucketLifecycleConfiguration' => $this->getBucketLifecycleConfiguration(),
            'getBucketLocation' => $this->getBucketLocation(),
            'getBucketLogging' => $this->getBucketLogging(),
            'getBucketMetadataTableConfiguration' => $this->getBucketMetadataTableConfiguration(),
            'getBucketMetricsConfiguration' => $this->getBucketMetricsConfiguration(),
            'getBucketNotification' => $this->getBucketNotification(),
            'getBucketNotificationConfiguration' => $this->getBucketNotificationConfiguration(),
            'getBucketOwnershipControls' => $this->getBucketOwnershipControls(),
            'getBucketPolicy' => $this->getBucketPolicy(),
            'getBucketPolicyStatus' => $this->getBucketPolicyStatus(),
            'getBucketReplication' => $this->getBucketReplication(),
            'getBucketRequestPayment' => $this->getBucketRequestPayment(),
            'getBucketTagging' => $this->getBucketTagging(),
            'getBucketVersioning' => $this->getBucketVersioning(),
            'getBucketWebsite' => $this->getBucketWebsite(),
            'getObject' => $this->getObject(),
            'getObjectAcl' => $this->getObjectAcl(),
            'getObjectAttributes' => $this->getObjectAttributes(),
            'getObjectLegalHold' => $this->getObjectLegalHold(),
            'getObjectLockConfiguration' => $this->getObjectLockConfiguration(),
            'getObjectRetention' => $this->getObjectRetention(),
            'getObjectTagging' => $this->getObjectTagging(),
            'getObjectTorrent' => $this->getObjectTorrent(),
            'getPublicAccessBlock' => $this->getPublicAccessBlock(),
            'headBucket' => $this->headBucket(),
            'headObject' => $this->headObject(),
            'listBucketAnalyticsConfigurations' => $this->listBucketAnalyticsConfigurations(),
            'listBucketIntelligentTieringConfigurations' => $this->listBucketIntelligentTieringConfigurations(),
            'listBucketInventoryConfigurations' => $this->listBucketInventoryConfigurations(),
            'listBucketMetricsConfigurations' => $this->listBucketMetricsConfigurations(),
            'listBuckets' => $this->listBuckets(),
            'listDirectoryBuckets' => $this->listDirectoryBuckets(),
            'listMultipartUploads' => $this->listMultipartUploads(),
            'listObjectVersions' => $this->listObjectVersions(),
            'listObjects' => $this->listObjects(),
            'listObjectsV2' => $this->listObjectsV2(),
            'listParts' => $this->listParts(),
            'putBucketAccelerateConfiguration' => $this->putBucketAccelerateConfiguration(),
            'putBucketAcl' => $this->putBucketAcl(),
            'putBucketAnalyticsConfiguration' => $this->putBucketAnalyticsConfiguration(),
            'putBucketCors' => $this->putBucketCors(),
            'putBucketEncryption' => $this->putBucketEncryption(),
            'putBucketIntelligentTieringConfiguration' => $this->putBucketIntelligentTieringConfiguration(),
            'putBucketInventoryConfiguration' => $this->putBucketInventoryConfiguration(),
            'putBucketLifecycle' => $this->putBucketLifecycle(),
            'putBucketLifecycleConfiguration' => $this->putBucketLifecycleConfiguration(),
            'putBucketLogging' => $this->putBucketLogging(),
            'putBucketMetricsConfiguration' => $this->putBucketMetricsConfiguration(),
            'putBucketNotification' => $this->putBucketNotification(),
            'putBucketNotificationConfiguration' => $this->putBucketNotificationConfiguration(),
            'putBucketOwnershipControls' => $this->putBucketOwnershipControls(),
            'putBucketPolicy' => $this->putBucketPolicy(),
            'putBucketReplication' => $this->putBucketReplication(),
            'putBucketRequestPayment' => $this->putBucketRequestPayment(),
            'putBucketTagging' => $this->putBucketTagging(),
            'putBucketVersioning' => $this->putBucketVersioning(),
            'putBucketWebsite' => $this->putBucketWebsite(),
            'putObject' => $this->putObject(),
            'putObjectAcl' => $this->putObjectAcl(),
            'putObjectLegalHold' => $this->putObjectLegalHold(),
            'putObjectLockConfiguration' => $this->putObjectLockConfiguration(),
            'putObjectRetention' => $this->putObjectRetention(),
            'putObjectTagging' => $this->putObjectTagging(),
            'putPublicAccessBlock' => $this->putPublicAccessBlock(),
            'restoreObject' => $this->restoreObject(),
            'selectObjectContent' => $this->selectObjectContent(),
            'uploadPart' => $this->uploadPart(),
            'uploadPartCopy' => $this->uploadPartCopy(),
            'writeGetObjectResponse' => $this->writeGetObjectResponse(),
        };
    }
    private function abortMultipartUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function completeMultipartUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function copyObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyObjectResult'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('CopySourceVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function createBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBucketMetadataTableConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createMultipartUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AbortDate'),
                new \PHPStan\Type\Constant\ConstantStringType('AbortRuleId'),
                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                ]),
            ]),
        ]);
    }
    private function createSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
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
            ]),
        ]);
    }
    private function deleteBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketAnalyticsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketCors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketIntelligentTieringConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketInventoryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketMetadataTableConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketMetricsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketOwnershipControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteBucketWebsite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeleteMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function deleteObjectTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteObjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeleteMarkerVersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deletePublicAccessBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getBucketAccelerateConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function getBucketAcl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                    new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CanonicalUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonCustomerByEmail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Group'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_CONTROL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WRITE_ACP'),
                        new \PHPStan\Type\Constant\ConstantStringType('READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('READ_ACP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketAnalyticsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnalyticsConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClassAnalysis'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataExport'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputSchemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V_1'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3BucketDestination'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketCors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CORSRules'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowedOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAgeSeconds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getBucketEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryptionConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyServerSideEncryptionByDefault'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSEAlgorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSMasterKeyID'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketIntelligentTieringConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IntelligentTieringConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tierings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessTier'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE_ACCESS'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketInventoryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InventoryConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludedObjectVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionalFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketDestination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Format'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parquet'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSES3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSEKMS'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('All'),
                        new \PHPStan\Type\Constant\ConstantStringType('Current'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsMultipartUploaded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectLockRetainUntilDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectLockMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectLockLegalHoldStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntelligentTieringAccessTier'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketKeyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectAccessControlList'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectOwner'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transition'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionTransition'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbortIncompleteMultipartUpload'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpiredObjectDeleteMarker'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewerNoncurrentVersions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewerNoncurrentVersions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DaysAfterInitiation'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                new \PHPStan\Type\Constant\ConstantStringType('TransitionDefaultMinimumObjectSize'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionTransitions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoncurrentVersionExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('AbortIncompleteMultipartUpload'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpiredObjectDeleteMarker'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeGreaterThan'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeLessThan'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeGreaterThan'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectSizeLessThan'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Date'),
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewerNoncurrentVersions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoncurrentDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewerNoncurrentVersions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DaysAfterInitiation'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('varies_by_storage_class'),
                    new \PHPStan\Type\Constant\ConstantStringType('all_storage_classes_128K'),
                ]),
            ]),
        ]);
    }
    private function getBucketLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LocationConstraint'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                    new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('EU'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                    new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                    new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                ]),
            ]),
        ]);
    }
    private function getBucketLogging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoggingEnabled'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetBucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGrants'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetPrefix'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetObjectKeyFormat'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ID'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('URI'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CanonicalUser'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmazonCustomerByEmail'),
                                new \PHPStan\Type\Constant\ConstantStringType('Group'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_CONTROL'),
                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                            new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SimplePrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('PartitionedPrefix'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PartitionDateSource'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('DeliveryTime'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketMetadataTableConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GetBucketMetadataTableConfigurationResult'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MetadataTableConfigurationResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3TablesDestinationResult'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TableBucketArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('TableNamespace'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketMetricsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MetricsConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TopicConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('QueueConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudFunctionConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('Event'),
                    new \PHPStan\Type\Constant\ConstantStringType('Topic'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Event'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('Queue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Event'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFunction'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvocationRole'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getBucketNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TopicConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('QueueConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('EventBridgeConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('TopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FilterRules'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FilterRules'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ReducedRedundancyLostObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:Copy'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectCreated:CompleteMultipartUpload'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRemoved:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Post'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationFailedReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationNotTracked'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationMissedThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:Replication:OperationReplicatedAfterThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectRestore:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleTransition'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:IntelligentTiering'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectAcl:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:Delete'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:LifecycleExpiration:DeleteMarkerCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:*'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Put'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3:ObjectTagging:Delete'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FilterRules'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([], []),
            ]),
        ]);
    }
    private function getBucketOwnershipControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OwnershipControls'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectOwnership'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwnerPreferred'),
                            new \PHPStan\Type\Constant\ConstantStringType('ObjectWriter'),
                            new \PHPStan\Type\Constant\ConstantStringType('BucketOwnerEnforced'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBucketPolicyStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IsPublic'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getBucketReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Role'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceSelectionCriteria'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExistingObjectReplication'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeleteMarkerReplication'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                            new \PHPStan\Type\Constant\ConstantStringType('And'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SseKmsEncryptedObjects'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicaModifications'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Account'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlTranslation'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplicationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metrics'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                                new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                                new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ReplicaKmsKeyID'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventThreshold'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getBucketRequestPayment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Payer'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Requester'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                ]),
            ]),
        ]);
    }
    private function getBucketTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getBucketVersioning(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('MFADelete'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Suspended'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ]),
            ]),
        ]);
    }
    private function getBucketWebsite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RedirectAllRequestsTo'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('ErrorDocument'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingRules'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HostName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                        new \PHPStan\Type\Constant\ConstantStringType('https'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Condition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Redirect'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HttpErrorCodeReturnedEquals'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixEquals'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HostName'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpRedirectCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplaceKeyPrefixWith'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplaceKeyWith'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http'),
                            new \PHPStan\Type\Constant\ConstantStringType('https'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Body'),
                new \PHPStan\Type\Constant\ConstantStringType('DeleteMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('Restore'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentLength'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                new \PHPStan\Type\Constant\ConstantStringType('MissingMeta'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentEncoding'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentLanguage'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentRange'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Expires'),
                new \PHPStan\Type\Constant\ConstantStringType('WebsiteRedirectLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('PartsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('TagCount'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockMode'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockRetainUntilDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockLegalHoldStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                ]),
            ]),
        ]);
    }
    private function getObjectAcl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                    new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CanonicalUser'),
                            new \PHPStan\Type\Constant\ConstantStringType('AmazonCustomerByEmail'),
                            new \PHPStan\Type\Constant\ConstantStringType('Group'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_CONTROL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WRITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WRITE_ACP'),
                        new \PHPStan\Type\Constant\ConstantStringType('READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('READ_ACP'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function getObjectAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeleteMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectParts'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectSize'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TotalPartsCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartNumberMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextPartNumberMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxParts'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parts'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PartNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getObjectLegalHold(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LegalHold'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getObjectLockConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ObjectLockEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Rule'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRetention'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Days'),
                            new \PHPStan\Type\Constant\ConstantStringType('Years'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getObjectRetention(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Retention'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetainUntilDate'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getObjectTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('TagSet'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getObjectTorrent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Body'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function getPublicAccessBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicAccessBlockConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('IgnorePublicAcls'),
                    new \PHPStan\Type\Constant\ConstantStringType('BlockPublicPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestrictPublicBuckets'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function headBucket(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BucketLocationType'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketLocationName'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketRegion'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessPointAlias'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalZone'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function headObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeleteMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('Restore'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentLength'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('MissingMeta'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentEncoding'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentLanguage'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentRange'),
                new \PHPStan\Type\Constant\ConstantStringType('Expires'),
                new \PHPStan\Type\Constant\ConstantStringType('WebsiteRedirectLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('PartsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockMode'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockRetainUntilDate'),
                new \PHPStan\Type\Constant\ConstantStringType('ObjectLockLegalHoldStatus'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE_ACCESS'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REPLICA'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GOVERNANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLIANCE'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ON'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                ]),
            ]),
        ]);
    }
    private function listBucketAnalyticsConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NextContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('AnalyticsConfigurationList'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClassAnalysis'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataExport'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OutputSchemaVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('V_1'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('S3BucketDestination'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BucketAccountId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listBucketIntelligentTieringConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NextContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('IntelligentTieringConfigurationList'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tierings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Days'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessTier'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ARCHIVE_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE_ACCESS'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listBucketInventoryConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('InventoryConfigurationList'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextContinuationToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludedObjectVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionalFields'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schedule'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3BucketDestination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Format'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CSV'),
                                new \PHPStan\Type\Constant\ConstantStringType('ORC'),
                                new \PHPStan\Type\Constant\ConstantStringType('Parquet'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSES3'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSEKMS'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([], []),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('All'),
                        new \PHPStan\Type\Constant\ConstantStringType('Current'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsMultipartUploaded'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReplicationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectLockRetainUntilDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectLockMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectLockLegalHoldStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('IntelligentTieringAccessTier'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketKeyStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectAccessControlList'),
                        new \PHPStan\Type\Constant\ConstantStringType('ObjectOwner'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Frequency'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Daily'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBucketMetricsConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NextContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('MetricsConfigurationList'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Filter'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tag'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('And'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessPointArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listBuckets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Buckets'),
                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDirectoryBuckets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Buckets'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('BucketRegion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMultipartUploads(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextKeyMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                new \PHPStan\Type\Constant\ConstantStringType('NextUploadIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxUploads'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Uploads'),
                new \PHPStan\Type\Constant\ConstantStringType('CommonPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('EncodingType'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UploadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Initiated'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Initiator'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function listObjectVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextKeyMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextVersionIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Versions'),
                new \PHPStan\Type\Constant\ConstantStringType('DeleteMarkers'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('CommonPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('EncodingType'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsLatest'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsRestoreInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreExpiryDate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsLatest'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function listObjects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('Contents'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('CommonPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('EncodingType'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsRestoreInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreExpiryDate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function listObjectsV2(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Contents'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                new \PHPStan\Type\Constant\ConstantStringType('Delimiter'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('CommonPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('EncodingType'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyCount'),
                new \PHPStan\Type\Constant\ConstantStringType('ContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NextContinuationToken'),
                new \PHPStan\Type\Constant\ConstantStringType('StartAfter'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestoreStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                        new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                        new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IsRestoreInProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('RestoreExpiryDate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function listParts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AbortDate'),
                new \PHPStan\Type\Constant\ConstantStringType('AbortRuleId'),
                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('PartNumberMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPartNumberMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxParts'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('Parts'),
                new \PHPStan\Type\Constant\ConstantStringType('Initiator'),
                new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PartNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONEZONE_IA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTELLIGENT_TIERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEEP_ARCHIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OUTPOSTS'),
                    new \PHPStan\Type\Constant\ConstantStringType('GLACIER_IR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPRESS_ONEZONE'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CRC32'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRC32C'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHA1'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHA256'),
                    new \PHPStan\Type\Constant\ConstantStringType('CRC64NVME'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                ]),
            ]),
        ]);
    }
    private function putBucketAccelerateConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketAcl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketAnalyticsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketCors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketIntelligentTieringConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketInventoryConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketLifecycle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketLifecycleConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitionDefaultMinimumObjectSize'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('varies_by_storage_class'),
                    new \PHPStan\Type\Constant\ConstantStringType('all_storage_classes_128K'),
                ]),
            ]),
        ]);
    }
    private function putBucketLogging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketMetricsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketNotificationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketOwnershipControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketReplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketRequestPayment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketVersioning(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putBucketWebsite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumType'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSEncryptionContext'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('Size'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPOSITE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULL_OBJECT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function putObjectAcl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function putObjectLegalHold(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function putObjectLockConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function putObjectRetention(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function putObjectTagging(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putPublicAccessBlock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function restoreObject(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
                new \PHPStan\Type\Constant\ConstantStringType('RestoreOutputPath'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function selectObjectContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Payload'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Records'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stats'),
                    new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cont'),
                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Payload'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BytesScanned'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesProcessed'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesReturned'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BytesScanned'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesProcessed'),
                            new \PHPStan\Type\Constant\ConstantStringType('BytesReturned'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                    new \PHPStan\Type\Constant\ConstantArrayType([], []),
                ]),
            ]),
        ]);
    }
    private function uploadPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function uploadPartCopy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopySourceVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('CopyPartResult'),
                new \PHPStan\Type\Constant\ConstantStringType('ServerSideEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerAlgorithm'),
                new \PHPStan\Type\Constant\ConstantStringType('SSECustomerKeyMD5'),
                new \PHPStan\Type\Constant\ConstantStringType('SSEKMSKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('BucketKeyEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestCharged'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC32C'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumCRC64NVME'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA1'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChecksumSHA256'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms:dsse'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantStringType('requester'),
            ]),
        ]);
    }
    private function writeGetObjectResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}