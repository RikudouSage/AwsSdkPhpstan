<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SqsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Sqs\SqsClient>
     */
    public function getClass(): string
    {
        return \Aws\Sqs\SqsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addPermission',
            'cancelMessageMoveTask',
            'changeMessageVisibility',
            'changeMessageVisibilityBatch',
            'createQueue',
            'deleteMessage',
            'deleteMessageBatch',
            'deleteQueue',
            'getQueueAttributes',
            'getQueueUrl',
            'listDeadLetterSourceQueues',
            'listMessageMoveTasks',
            'listQueueTags',
            'listQueues',
            'purgeQueue',
            'receiveMessage',
            'removePermission',
            'sendMessage',
            'sendMessageBatch',
            'setQueueAttributes',
            'startMessageMoveTask',
            'tagQueue',
            'untagQueue',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addPermission' => $this->addPermission(),
            'cancelMessageMoveTask' => $this->cancelMessageMoveTask(),
            'changeMessageVisibility' => $this->changeMessageVisibility(),
            'changeMessageVisibilityBatch' => $this->changeMessageVisibilityBatch(),
            'createQueue' => $this->createQueue(),
            'deleteMessage' => $this->deleteMessage(),
            'deleteMessageBatch' => $this->deleteMessageBatch(),
            'deleteQueue' => $this->deleteQueue(),
            'getQueueAttributes' => $this->getQueueAttributes(),
            'getQueueUrl' => $this->getQueueUrl(),
            'listDeadLetterSourceQueues' => $this->listDeadLetterSourceQueues(),
            'listMessageMoveTasks' => $this->listMessageMoveTasks(),
            'listQueueTags' => $this->listQueueTags(),
            'listQueues' => $this->listQueues(),
            'purgeQueue' => $this->purgeQueue(),
            'receiveMessage' => $this->receiveMessage(),
            'removePermission' => $this->removePermission(),
            'sendMessage' => $this->sendMessage(),
            'sendMessageBatch' => $this->sendMessageBatch(),
            'setQueueAttributes' => $this->setQueueAttributes(),
            'startMessageMoveTask' => $this->startMessageMoveTask(),
            'tagQueue' => $this->tagQueue(),
            'untagQueue' => $this->untagQueue(),
        };
    }
    private function addPermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function cancelMessageMoveTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApproximateNumberOfMessagesMoved'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function changeMessageVisibility(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function changeMessageVisibilityBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderFault'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueueUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMessageBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderFault'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getQueueAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('All'),
                    new \PHPStan\Type\Constant\ConstantStringType('Policy'),
                    new \PHPStan\Type\Constant\ConstantStringType('VisibilityTimeout'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaximumMessageSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageRetentionPeriod'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateNumberOfMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateNumberOfMessagesNotVisible'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueueArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateNumberOfMessagesDelayed'),
                    new \PHPStan\Type\Constant\ConstantStringType('DelaySeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiveMessageWaitTimeSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedrivePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('FifoQueue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentBasedDeduplication'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsMasterKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsDataKeyReusePeriodSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeduplicationScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('FifoThroughputLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedriveAllowPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('SqsManagedSseEnabled'),
                ]), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getQueueUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueueUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeadLetterSourceQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('queueUrls'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMessageMoveTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TaskHandle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxNumberOfMessagesPerSecond'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateNumberOfMessagesMoved'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateNumberOfMessagesToMove'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedTimestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listQueueTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listQueues(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueueUrls'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function purgeQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function receiveMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Messages'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiptHandle'),
                    new \PHPStan\Type\Constant\ConstantStringType('MD5OfBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('Body'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageAttributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('All'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SentTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateReceiveCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApproximateFirstReceiveTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageDeduplicationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSTraceHeader'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeadLetterQueueSourceArn'),
                    ]), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StringValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('BinaryValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('StringListValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('BinaryListValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('DataType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function removePermission(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function sendMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageBody'),
                new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageSystemAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendMessageBatch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                new \PHPStan\Type\Constant\ConstantStringType('Failed'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('MD5OfMessageSystemAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('SequenceNumber'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderFault'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function setQueueAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startMessageMoveTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TaskHandle'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagQueue(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}