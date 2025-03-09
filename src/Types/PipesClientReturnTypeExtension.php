<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class PipesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Pipes\PipesClient>
     */
    public function getClass(): string
    {
        return \Aws\Pipes\PipesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createPipe',
            'deletePipe',
            'describePipe',
            'listPipes',
            'listTagsForResource',
            'startPipe',
            'stopPipe',
            'tagResource',
            'untagResource',
            'updatePipe',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createPipe' => $this->createPipe(),
            'deletePipe' => $this->deletePipe(),
            'describePipe' => $this->describePipe(),
            'listPipes' => $this->listPipes(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startPipe' => $this->startPipe(),
            'stopPipe' => $this->stopPipe(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updatePipe' => $this->updatePipe(),
        };
    }
    private function createPipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deletePipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describePipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Enrichment'),
                new \PHPStan\Type\Constant\ConstantStringType('EnrichmentParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LogConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FilterCriteria'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('DynamoDBStreamParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SqsQueueParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveMQBrokerParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RabbitMQBrokerParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedStreamingKafkaParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SelfManagedKafkaParameters'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Filters'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pattern'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnPartialBatchItemFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPositionTimestamp'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC_BISECT'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('AT_TIMESTAMP'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeadLetterConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('OnPartialBatchItemFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRecordAgeInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumRetryAttempts'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParallelizationFactor'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATIC_BISECT'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueueName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BasicAuth'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueueName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VirtualHost'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BasicAuth'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupID'),
                        new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SaslScram512Auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateTlsAuth'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TopicName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartingPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalBootstrapServers'),
                        new \PHPStan\Type\Constant\ConstantStringType('BatchSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaximumBatchingWindowInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumerGroupID'),
                        new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerRootCaCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Vpc'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TRIM_HORIZON'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BasicAuth'),
                            new \PHPStan\Type\Constant\ConstantStringType('SaslScram512Auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('SaslScram256Auth'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateTlsAuth'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroup'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InputTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PathParameterValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringParameters'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InputTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepFunctionStateMachineParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('EcsTaskParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('BatchJobParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SqsQueueParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RedshiftDataParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('SageMakerPipelineParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventBridgeEventBusParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimestreamParameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_RESPONSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIRE_AND_FORGET'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InvocationType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_RESPONSE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FIRE_AND_FORGET'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PartitionKey'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TaskDefinitionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TaskCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('LaunchType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Group'),
                        new \PHPStan\Type\Constant\ConstantStringType('CapacityProviderStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableECSManagedTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableExecuteCommand'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlacementConstraints'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlacementStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('PropagateTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferenceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2'),
                            new \PHPStan\Type\Constant\ConstantStringType('FARGATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsvpcConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('AssignPublicIp'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('capacityProvider'),
                            new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('base'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('expression'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('distinctInstance'),
                                new \PHPStan\Type\Constant\ConstantStringType('memberOf'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('field'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('random'),
                                new \PHPStan\Type\Constant\ConstantStringType('spread'),
                                new \PHPStan\Type\Constant\ConstantStringType('binpack'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantStringType('TASK_DEFINITION'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ContainerOverrides'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                            new \PHPStan\Type\Constant\ConstantStringType('EphemeralStorage'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InferenceAcceleratorOverrides'),
                            new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaskRoleArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Command'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cpu'),
                                new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentFiles'),
                                new \PHPStan\Type\Constant\ConstantStringType('Memory'),
                                new \PHPStan\Type\Constant\ConstantStringType('MemoryReservation'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceRequirements'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('s3'),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                        new \PHPStan\Type\Constant\ConstantStringType('InferenceAccelerator'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sizeInGiB'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('JobDefinition'),
                        new \PHPStan\Type\Constant\ConstantStringType('JobName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ArrayProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetryStrategy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContainerOverrides'),
                        new \PHPStan\Type\Constant\ConstantStringType('DependsOn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Size'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attempts'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Command'),
                            new \PHPStan\Type\Constant\ConstantStringType('Environment'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceRequirements'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GPU'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MEMORY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VCPU'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('N_TO_N'),
                                new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MessageGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageDeduplicationId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PathParameterValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringParameters'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecretManagerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Database'),
                        new \PHPStan\Type\Constant\ConstantStringType('DbUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatementName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WithEvent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Sqls'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PipelineParameterList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('Time'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TimeValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('EpochTimeUnit'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeFieldType'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimestampFormat'),
                        new \PHPStan\Type\Constant\ConstantStringType('VersionValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DimensionMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('SingleMeasureMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureMappings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MILLISECONDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECONDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MICROSECONDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NANOSECONDS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EPOCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP_FORMAT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionValueType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DimensionName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MeasureValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeasureName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureName'),
                            new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureAttributeMappings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MeasureValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('MeasureValueType'),
                                new \PHPStan\Type\Constant\ConstantStringType('MultiMeasureAttributeName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DOUBLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BIGINT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VARCHAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BOOLEAN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMESTAMP'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3LogDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('FirehoseLogDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudwatchLogsLogDestination'),
                    new \PHPStan\Type\Constant\ConstantStringType('Level'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeExecutionData'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputFormat'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('json'),
                            new \PHPStan\Type\Constant\ConstantStringType('plain'),
                            new \PHPStan\Type\Constant\ConstantStringType('w3c'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeliveryStreamArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LogGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('ALL')),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPipes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Pipes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enrichment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startPipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function stopPipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updatePipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('CurrentState'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_ROLLBACK_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}