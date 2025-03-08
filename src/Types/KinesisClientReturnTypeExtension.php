<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class KinesisClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Kinesis\KinesisClient>
     */
    public function getClass(): string
    {
        return \Aws\Kinesis\KinesisClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addTagsToStream',
            'createStream',
            'decreaseStreamRetentionPeriod',
            'deleteResourcePolicy',
            'deleteStream',
            'deregisterStreamConsumer',
            'describeLimits',
            'describeStream',
            'describeStreamConsumer',
            'describeStreamSummary',
            'disableEnhancedMonitoring',
            'enableEnhancedMonitoring',
            'getRecords',
            'getResourcePolicy',
            'getShardIterator',
            'increaseStreamRetentionPeriod',
            'listShards',
            'listStreamConsumers',
            'listStreams',
            'listTagsForStream',
            'mergeShards',
            'putRecord',
            'putRecords',
            'putResourcePolicy',
            'registerStreamConsumer',
            'removeTagsFromStream',
            'splitShard',
            'startStreamEncryption',
            'stopStreamEncryption',
            'updateShardCount',
            'updateStreamMode',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addTagsToStream' => $this->addTagsToStream(),
            'createStream' => $this->createStream(),
            'decreaseStreamRetentionPeriod' => $this->decreaseStreamRetentionPeriod(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteStream' => $this->deleteStream(),
            'deregisterStreamConsumer' => $this->deregisterStreamConsumer(),
            'describeLimits' => $this->describeLimits(),
            'describeStream' => $this->describeStream(),
            'describeStreamConsumer' => $this->describeStreamConsumer(),
            'describeStreamSummary' => $this->describeStreamSummary(),
            'disableEnhancedMonitoring' => $this->disableEnhancedMonitoring(),
            'enableEnhancedMonitoring' => $this->enableEnhancedMonitoring(),
            'getRecords' => $this->getRecords(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getShardIterator' => $this->getShardIterator(),
            'increaseStreamRetentionPeriod' => $this->increaseStreamRetentionPeriod(),
            'listShards' => $this->listShards(),
            'listStreamConsumers' => $this->listStreamConsumers(),
            'listStreams' => $this->listStreams(),
            'listTagsForStream' => $this->listTagsForStream(),
            'mergeShards' => $this->mergeShards(),
            'putRecord' => $this->putRecord(),
            'putRecords' => $this->putRecords(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'registerStreamConsumer' => $this->registerStreamConsumer(),
            'removeTagsFromStream' => $this->removeTagsFromStream(),
            'splitShard' => $this->splitShard(),
            'startStreamEncryption' => $this->startStreamEncryption(),
            'stopStreamEncryption' => $this->stopStreamEncryption(),
            'updateShardCount' => $this->updateShardCount(),
            'updateStreamMode' => $this->updateStreamMode(),
        };
    }
    private function addTagsToStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function decreaseStreamRetentionPeriod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterStreamConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShardLimit'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenShardCount'),
                new \PHPStan\Type\Constant\ConstantStringType('OnDemandStreamCount'),
                new \PHPStan\Type\Constant\ConstantStringType('OnDemandStreamCountLimit'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamModeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasMoreShards'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamCreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ShardId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentShardId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdjacentParentShardId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HashKeyRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('SequenceNumberRange'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartingHashKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndingHashKey'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartingSequenceNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndingSequenceNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ShardLevelMetrics'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IncomingBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncomingRecords'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutgoingBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutgoingRecords'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteProvisionedThroughputExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadProvisionedThroughputExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('IteratorAgeMilliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeStreamConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConsumerDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerCreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeStreamSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamDescriptionSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamModeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetentionPeriodHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamCreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnhancedMonitoring'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpenShardCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ShardLevelMetrics'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IncomingBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncomingRecords'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutgoingBytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutgoingRecords'),
                            new \PHPStan\Type\Constant\ConstantStringType('WriteProvisionedThroughputExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadProvisionedThroughputExceeded'),
                            new \PHPStan\Type\Constant\ConstantStringType('IteratorAgeMilliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function disableEnhancedMonitoring(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentShardLevelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredShardLevelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('IteratorAgeMilliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('IteratorAgeMilliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function enableEnhancedMonitoring(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentShardLevelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredShardLevelMetrics'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('IteratorAgeMilliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncomingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingBytes'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutgoingRecords'),
                    new \PHPStan\Type\Constant\ConstantStringType('WriteProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadProvisionedThroughputExceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('IteratorAgeMilliseconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('NextShardIterator'),
                new \PHPStan\Type\Constant\ConstantStringType('MillisBehindLatest'),
                new \PHPStan\Type\Constant\ConstantStringType('ChildShards'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateArrivalTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Data'),
                    new \PHPStan\Type\Constant\ConstantStringType('PartitionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShardId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentShards'),
                    new \PHPStan\Type\Constant\ConstantStringType('HashKeyRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartingHashKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndingHashKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getShardIterator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShardIterator'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function increaseStreamRetentionPeriod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function listShards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Shards'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ShardId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentShardId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdjacentParentShardId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HashKeyRange'),
                    new \PHPStan\Type\Constant\ConstantStringType('SequenceNumberRange'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartingHashKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndingHashKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartingSequenceNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndingSequenceNumber'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStreamConsumers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Consumers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerCreationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamNames'),
                new \PHPStan\Type\Constant\ConstantStringType('HasMoreStreams'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamModeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamCreationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listTagsForStream(): ?\PHPStan\Type\Type
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
    private function mergeShards(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ShardId'),
                new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                ]),
            ]),
        ]);
    }
    private function putRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedRecordCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('EncryptionType'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShardId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMS'),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function registerStreamConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Consumer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumerCreationTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function removeTagsFromStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function splitShard(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startStreamEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function stopStreamEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateShardCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamName'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentShardCount'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetShardCount'),
                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStreamMode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}