<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DataExchangeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DataExchange\DataExchangeClient>
     */
    public function getClass(): string
    {
        return \Aws\DataExchange\DataExchangeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptDataGrant',
            'cancelJob',
            'createDataGrant',
            'createDataSet',
            'createEventAction',
            'createJob',
            'createRevision',
            'deleteAsset',
            'deleteDataGrant',
            'deleteDataSet',
            'deleteEventAction',
            'deleteRevision',
            'getAsset',
            'getDataGrant',
            'getDataSet',
            'getEventAction',
            'getJob',
            'getReceivedDataGrant',
            'getRevision',
            'listDataGrants',
            'listDataSetRevisions',
            'listDataSets',
            'listEventActions',
            'listJobs',
            'listReceivedDataGrants',
            'listRevisionAssets',
            'listTagsForResource',
            'revokeRevision',
            'sendApiAsset',
            'sendDataSetNotification',
            'startJob',
            'tagResource',
            'untagResource',
            'updateAsset',
            'updateDataSet',
            'updateEventAction',
            'updateRevision',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptDataGrant' => $this->acceptDataGrant(),
            'cancelJob' => $this->cancelJob(),
            'createDataGrant' => $this->createDataGrant(),
            'createDataSet' => $this->createDataSet(),
            'createEventAction' => $this->createEventAction(),
            'createJob' => $this->createJob(),
            'createRevision' => $this->createRevision(),
            'deleteAsset' => $this->deleteAsset(),
            'deleteDataGrant' => $this->deleteDataGrant(),
            'deleteDataSet' => $this->deleteDataSet(),
            'deleteEventAction' => $this->deleteEventAction(),
            'deleteRevision' => $this->deleteRevision(),
            'getAsset' => $this->getAsset(),
            'getDataGrant' => $this->getDataGrant(),
            'getDataSet' => $this->getDataSet(),
            'getEventAction' => $this->getEventAction(),
            'getJob' => $this->getJob(),
            'getReceivedDataGrant' => $this->getReceivedDataGrant(),
            'getRevision' => $this->getRevision(),
            'listDataGrants' => $this->listDataGrants(),
            'listDataSetRevisions' => $this->listDataSetRevisions(),
            'listDataSets' => $this->listDataSets(),
            'listEventActions' => $this->listEventActions(),
            'listJobs' => $this->listJobs(),
            'listReceivedDataGrants' => $this->listReceivedDataGrants(),
            'listRevisionAssets' => $this->listRevisionAssets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'revokeRevision' => $this->revokeRevision(),
            'sendApiAsset' => $this->sendApiAsset(),
            'sendDataSetNotification' => $this->sendDataSetNotification(),
            'startJob' => $this->startJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAsset' => $this->updateAsset(),
            'updateDataSet' => $this->updateDataSet(),
            'updateEventAction' => $this->updateEventAction(),
            'updateRevision' => $this->updateRevision(),
        };
    }
    private function acceptDataGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('ReceiverPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptanceState'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndsAt'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantDistributionScope'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_RECEIVER_ACCEPTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_ORGANIZATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function cancelJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createDataGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('ReceiverPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptanceState'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndsAt'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantDistributionScope'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceDataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_RECEIVER_ACCEPTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_ORGANIZATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OWNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENTITLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataGrantId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createEventAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionToS3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionDestination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RevisionPublished'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportAssetToSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportAssetsToS3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionsToS3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromS3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromRedshiftDataShares'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromApiGatewayApi'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateS3DataAccessFromS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromLakeFormationTagPolicy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrlExpiresAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetDestinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionDestinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventActionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Md5Hash'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrlExpiresAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationMd5Hash'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationUploadUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationUploadUrlExpiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('REST'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeysToGrant'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        new \PHPStan\Type\Constant\ConstantStringType('LimitName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LimitValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MALWARE_DETECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MALWARE_SCAN_ENCRYPTED_FILE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromSignedUrlJobErrorDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromS3JobErrorDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets per revision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asset size in GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Redshift datashare assets per revision'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Lake Formation data permission assets per revision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon S3 data access assets per revision'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_SET'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSET_FROM_SIGNED_URL'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ASSETS_TO_S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ASSET_TO_SIGNED_URL'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORT_REVISIONS_TO_S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSET_FROM_API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Finalized'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RevocationComment'),
                new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDataGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteEventAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3SnapshotAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftDataShareAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayApiAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3DataAccessAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionAsset'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationDownloadUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationDownloadUrlExpiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('REST'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3AccessPointAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3AccessPointArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeysToGrant'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Database'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getDataGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('ReceiverPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptanceState'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndsAt'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantDistributionScope'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceDataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_RECEIVER_ACCEPTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_ORGANIZATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OWNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENTITLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataGrantId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getEventAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionToS3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionDestination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RevisionPublished'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportAssetToSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportAssetsToS3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionsToS3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromSignedUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromS3'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromRedshiftDataShares'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromApiGatewayApi'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateS3DataAccessFromS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromLakeFormationTagPolicy'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrlExpiresAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetDestinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionDestinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventActionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Md5Hash'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignedUrlExpiresAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetSources'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationMd5Hash'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationUploadUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationUploadUrlExpiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('REST'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AssetSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeysToGrant'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('Table'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                            new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        new \PHPStan\Type\Constant\ConstantStringType('LimitName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LimitValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MALWARE_DETECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('MALWARE_SCAN_ENCRYPTED_FILE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromSignedUrlJobErrorDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromS3JobErrorDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Assets per revision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asset size in GB'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon Redshift datashare assets per revision'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS Lake Formation data permission assets per revision'),
                            new \PHPStan\Type\Constant\ConstantStringType('Amazon S3 data access assets per revision'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REVISION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                            new \PHPStan\Type\Constant\ConstantStringType('DATA_SET'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSET_FROM_SIGNED_URL'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ASSETS_TO_S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ASSET_TO_SIGNED_URL'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPORT_REVISIONS_TO_S3'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSET_FROM_API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getReceivedDataGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SenderPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('ReceiverPrincipal'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptanceState'),
                new \PHPStan\Type\Constant\ConstantStringType('AcceptedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndsAt'),
                new \PHPStan\Type\Constant\ConstantStringType('GrantDistributionScope'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_RECEIVER_ACCEPTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_ORGANIZATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Finalized'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RevocationComment'),
                new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listDataGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataGrantSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderPrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReceiverPrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcceptanceState'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcceptedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceDataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_RECEIVER_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSetRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Revisions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Finalized'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevocationComment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listDataSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataSets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OWNED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENTITLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DataGrantId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEventActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventActions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Event'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionToS3'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionDestination'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RevisionPublished'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExportAssetToSignedUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExportAssetsToS3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionsToS3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromSignedUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromS3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromRedshiftDataShares'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromApiGatewayApi'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateS3DataAccessFromS3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromLakeFormationTagPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignedUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignedUrlExpiresAt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetDestinations'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AssetId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionDestinations'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventActionArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Md5Hash'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignedUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignedUrlExpiresAt'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetSources'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetSources'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DataShareArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApiDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationMd5Hash'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationUploadUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationUploadUrlExpiresAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('REST'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AssetSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KmsKeysToGrant'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('Database'),
                                new \PHPStan\Type\Constant\ConstantStringType('Table'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                                ], [
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\StringType(),
                                            ])),
                                        ]),
                                    ])),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                                new \PHPStan\Type\Constant\ConstantStringType('LimitName'),
                                new \PHPStan\Type\Constant\ConstantStringType('LimitValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED_EXCEPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_SERVER_EXCEPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MALWARE_DETECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND_EXCEPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE_QUOTA_EXCEEDED_EXCEPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_EXCEPTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MALWARE_SCAN_ENCRYPTED_FILE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetFromSignedUrlJobErrorDetails'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ImportAssetsFromS3JobErrorDetails'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AssetName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Assets per revision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Asset size in GB'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amazon Redshift datashare assets per revision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWS Lake Formation data permission assets per revision'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Amazon S3 data access assets per revision'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REVISION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ASSET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATA_SET'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('WAITING'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSET_FROM_SIGNED_URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ASSETS_TO_S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ASSET_TO_SIGNED_URL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPORT_REVISIONS_TO_S3'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_REDSHIFT_DATA_SHARES'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSET_FROM_API_GATEWAY_API'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_S3_DATA_ACCESS_FROM_S3_BUCKET'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ASSETS_FROM_LAKE_FORMATION_TAG_POLICY'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReceivedDataGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DataGrantSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderPrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReceiverPrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcceptanceState'),
                        new \PHPStan\Type\Constant\ConstantStringType('AcceptedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndsAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_RECEIVER_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRevisionAssets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Assets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssetDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3SnapshotAsset'),
                            new \PHPStan\Type\Constant\ConstantStringType('RedshiftDataShareAsset'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayApiAsset'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3DataAccessAsset'),
                            new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionAsset'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Size'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ApiDescription'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationDownloadUrl'),
                                new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationDownloadUrlExpiresAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\Constant\ConstantStringType('REST'),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3AccessPointAlias'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3AccessPointArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeysToGrant'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Database'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Table'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                                        new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ])),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function revokeRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Finalized'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RevocationComment'),
                new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function sendApiAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Body'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeaders'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function sendDataSetNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAsset(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('RevisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3SnapshotAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftDataShareAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayApiAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3DataAccessAsset'),
                    new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionAsset'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Size'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationDownloadUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApiSpecificationDownloadUrlExpiresAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('REST'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyPrefixes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3AccessPointAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3AccessPointArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeysToGrant'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('LakeFormationDataPermissionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CatalogId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATABASE'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Database'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Table'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Expression'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('TagKey'),
                                                new \PHPStan\Type\Constant\ConstantStringType('TagValues'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('LFTagPolicy'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DESCRIBE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SELECT'),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateDataSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('AssetType'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Origin'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3_SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT_DATA_SHARE'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY_API'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA_ACCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAKE_FORMATION_DATA_PERMISSION'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OWNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENTITLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataGrantId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateEventAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Action'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Event'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportRevisionToS3'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('RevisionDestination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aws:kms'),
                                new \PHPStan\Type\Constant\ConstantStringType('AES256'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RevisionPublished'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('Finalized'),
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('RevocationComment'),
                new \PHPStan\Type\Constant\ConstantStringType('Revoked'),
                new \PHPStan\Type\Constant\ConstantStringType('RevokedAt'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}