<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DynamoDbStreamsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DynamoDbStreams\DynamoDbStreamsClient>
     */
    public function getClass(): string
    {
        return \Aws\DynamoDbStreams\DynamoDbStreamsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'describeStream',
            'getRecords',
            'getShardIterator',
            'listStreams',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'describeStream' => $this->describeStream(),
            'getRecords' => $this->getRecords(),
            'getShardIterator' => $this->getShardIterator(),
            'listStreams' => $this->listStreams(),
        };
    }
    private function describeStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamDescription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationRequestDateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeySchema'),
                    new \PHPStan\Type\Constant\ConstantStringType('Shards'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedShardId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                        new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AttributeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HASH'),
                            new \PHPStan\Type\Constant\ConstantStringType('RANGE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ShardId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SequenceNumberRange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParentShardId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartingSequenceNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndingSequenceNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRecords(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Records'),
                new \PHPStan\Type\Constant\ConstantStringType('NextShardIterator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventID'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('dynamodb'),
                    new \PHPStan\Type\Constant\ConstantStringType('userIdentity'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INSERT'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateCreationDateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Keys'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('OldImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SizeBytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamViewType'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('S'),
                            new \PHPStan\Type\Constant\ConstantStringType('N'),
                            new \PHPStan\Type\Constant\ConstantStringType('B'),
                            new \PHPStan\Type\Constant\ConstantStringType('SS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BS'),
                            new \PHPStan\Type\Constant\ConstantStringType('M'),
                            new \PHPStan\Type\Constant\ConstantStringType('L'),
                            new \PHPStan\Type\Constant\ConstantStringType('NULL'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ResourceType(),
                                new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('OLD_IMAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEW_AND_OLD_IMAGES'),
                            new \PHPStan\Type\Constant\ConstantStringType('KEYS_ONLY'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
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
    private function listStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Streams'),
                new \PHPStan\Type\Constant\ConstantStringType('LastEvaluatedStreamArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StreamArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TableName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamLabel'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}