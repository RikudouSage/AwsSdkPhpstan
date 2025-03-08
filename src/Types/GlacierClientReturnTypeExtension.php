<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GlacierClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Glacier\GlacierClient>
     */
    public function getClass(): string
    {
        return \Aws\Glacier\GlacierClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'abortMultipartUpload',
            'abortVaultLock',
            'addTagsToVault',
            'completeMultipartUpload',
            'completeVaultLock',
            'createVault',
            'deleteArchive',
            'deleteVault',
            'deleteVaultAccessPolicy',
            'deleteVaultNotifications',
            'describeJob',
            'describeVault',
            'getDataRetrievalPolicy',
            'getJobOutput',
            'getVaultAccessPolicy',
            'getVaultLock',
            'getVaultNotifications',
            'initiateJob',
            'initiateMultipartUpload',
            'initiateVaultLock',
            'listJobs',
            'listMultipartUploads',
            'listParts',
            'listProvisionedCapacity',
            'listTagsForVault',
            'listVaults',
            'purchaseProvisionedCapacity',
            'removeTagsFromVault',
            'setDataRetrievalPolicy',
            'setVaultAccessPolicy',
            'setVaultNotifications',
            'uploadArchive',
            'uploadMultipartPart',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'abortMultipartUpload' => $this->abortMultipartUpload(),
            'abortVaultLock' => $this->abortVaultLock(),
            'addTagsToVault' => $this->addTagsToVault(),
            'completeMultipartUpload' => $this->completeMultipartUpload(),
            'completeVaultLock' => $this->completeVaultLock(),
            'createVault' => $this->createVault(),
            'deleteArchive' => $this->deleteArchive(),
            'deleteVault' => $this->deleteVault(),
            'deleteVaultAccessPolicy' => $this->deleteVaultAccessPolicy(),
            'deleteVaultNotifications' => $this->deleteVaultNotifications(),
            'describeJob' => $this->describeJob(),
            'describeVault' => $this->describeVault(),
            'getDataRetrievalPolicy' => $this->getDataRetrievalPolicy(),
            'getJobOutput' => $this->getJobOutput(),
            'getVaultAccessPolicy' => $this->getVaultAccessPolicy(),
            'getVaultLock' => $this->getVaultLock(),
            'getVaultNotifications' => $this->getVaultNotifications(),
            'initiateJob' => $this->initiateJob(),
            'initiateMultipartUpload' => $this->initiateMultipartUpload(),
            'initiateVaultLock' => $this->initiateVaultLock(),
            'listJobs' => $this->listJobs(),
            'listMultipartUploads' => $this->listMultipartUploads(),
            'listParts' => $this->listParts(),
            'listProvisionedCapacity' => $this->listProvisionedCapacity(),
            'listTagsForVault' => $this->listTagsForVault(),
            'listVaults' => $this->listVaults(),
            'purchaseProvisionedCapacity' => $this->purchaseProvisionedCapacity(),
            'removeTagsFromVault' => $this->removeTagsFromVault(),
            'setDataRetrievalPolicy' => $this->setDataRetrievalPolicy(),
            'setVaultAccessPolicy' => $this->setVaultAccessPolicy(),
            'setVaultNotifications' => $this->setVaultNotifications(),
            'uploadArchive' => $this->uploadArchive(),
            'uploadMultipartPart' => $this->uploadMultipartPart(),
        };
    }
    private function abortMultipartUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function abortVaultLock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function addTagsToVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function completeMultipartUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('archiveId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function completeVaultLock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('location'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVaultAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVaultNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('JobDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultARN'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('InventorySizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('SNSTopic'),
                new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                new \PHPStan\Type\Constant\ConstantStringType('SHA256TreeHash'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveSHA256TreeHash'),
                new \PHPStan\Type\Constant\ConstantStringType('RetrievalByteRange'),
                new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                new \PHPStan\Type\Constant\ConstantStringType('InventoryRetrievalParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('JobOutputPath'),
                new \PHPStan\Type\Constant\ConstantStringType('SelectParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveRetrieval'),
                    new \PHPStan\Type\Constant\ConstantStringType('InventoryRetrieval'),
                    new \PHPStan\Type\Constant\ConstantStringType('Select'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InputSerialization'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpressionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputSerialization'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('csv'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FileHeaderInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('Comments'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuoteEscapeCharacter'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuoteCharacter'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('USE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('csv'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QuoteFields'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuoteEscapeCharacter'),
                            new \PHPStan\Type\Constant\ConstantStringType('RecordDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldDelimiter'),
                            new \PHPStan\Type\Constant\ConstantStringType('QuoteCharacter'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASNEEDED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('CannedACL'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlList'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tagging'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KMSContext'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('private'),
                            new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                            new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                            new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                            new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                            new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                                new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AmazonCustomerByEmail'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CanonicalUser'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
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
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VaultARN'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastInventoryDate'),
                new \PHPStan\Type\Constant\ConstantStringType('NumberOfArchives'),
                new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getDataRetrievalPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Strategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('BytesPerHour'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getJobOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('body'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('contentRange'),
                new \PHPStan\Type\Constant\ConstantStringType('acceptRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('archiveDescription'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getVaultAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getVaultLock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getVaultNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('vaultNotificationConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SNSTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('Events'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function initiateJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('jobOutputPath'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function initiateMultipartUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function initiateVaultLock(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lockId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('JobList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('InventorySizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNSTopic'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletionDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHA256TreeHash'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveSHA256TreeHash'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetrievalByteRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tier'),
                    new \PHPStan\Type\Constant\ConstantStringType('InventoryRetrievalParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobOutputPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelectParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputLocation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ArchiveRetrieval'),
                        new \PHPStan\Type\Constant\ConstantStringType('InventoryRetrieval'),
                        new \PHPStan\Type\Constant\ConstantStringType('Select'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Succeeded'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputSerialization'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpressionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputSerialization'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('csv'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FileHeaderInfo'),
                                new \PHPStan\Type\Constant\ConstantStringType('Comments'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuoteEscapeCharacter'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecordDelimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldDelimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuoteCharacter'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('USE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IGNORE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('SQL'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('csv'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QuoteFields'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuoteEscapeCharacter'),
                                new \PHPStan\Type\Constant\ConstantStringType('RecordDelimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldDelimiter'),
                                new \PHPStan\Type\Constant\ConstantStringType('QuoteCharacter'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASNEEDED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('S3'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                            new \PHPStan\Type\Constant\ConstantStringType('CannedACL'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlList'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tagging'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserMetadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageClass'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('KMSContext'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('private'),
                                new \PHPStan\Type\Constant\ConstantStringType('public-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('public-read-write'),
                                new \PHPStan\Type\Constant\ConstantStringType('aws-exec-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticated-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-read'),
                                new \PHPStan\Type\Constant\ConstantStringType('bucket-owner-full-control'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Grantee'),
                                new \PHPStan\Type\Constant\ConstantStringType('Permission'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('URI'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ID'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AmazonCustomerByEmail'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CanonicalUser'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
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
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                                new \PHPStan\Type\Constant\ConstantStringType('REDUCED_REDUNDANCY'),
                                new \PHPStan\Type\Constant\ConstantStringType('STANDARD_IA'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMultipartUploads(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UploadsList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MultipartUploadId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ArchiveDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartSizeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listParts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MultipartUploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('VaultARN'),
                new \PHPStan\Type\Constant\ConstantStringType('ArchiveDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('PartSizeInBytes'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Parts'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RangeInBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SHA256TreeHash'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisionedCapacity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedCapacityList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listTagsForVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listVaults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VaultList'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VaultARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('VaultName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastInventoryDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfArchives'),
                    new \PHPStan\Type\Constant\ConstantStringType('SizeInBytes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function purchaseProvisionedCapacity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('capacityId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeTagsFromVault(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setDataRetrievalPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setVaultAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setVaultNotifications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function uploadArchive(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
                new \PHPStan\Type\Constant\ConstantStringType('archiveId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function uploadMultipartPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('checksum'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}