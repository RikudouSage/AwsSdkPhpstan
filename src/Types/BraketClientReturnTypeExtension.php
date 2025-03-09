<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class BraketClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Braket\BraketClient>
     */
    public function getClass(): string
    {
        return \Aws\Braket\BraketClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelJob',
            'cancelQuantumTask',
            'createJob',
            'createQuantumTask',
            'getDevice',
            'getJob',
            'getQuantumTask',
            'listTagsForResource',
            'searchDevices',
            'searchJobs',
            'searchQuantumTasks',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelJob' => $this->cancelJob(),
            'cancelQuantumTask' => $this->cancelQuantumTask(),
            'createJob' => $this->createJob(),
            'createQuantumTask' => $this->createQuantumTask(),
            'getDevice' => $this->getDevice(),
            'getJob' => $this->getJob(),
            'getQuantumTask' => $this->getQuantumTask(),
            'listTagsForResource' => $this->listTagsForResource(),
            'searchDevices' => $this->searchDevices(),
            'searchJobs' => $this->searchJobs(),
            'searchQuantumTasks' => $this->searchQuantumTasks(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function cancelJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cancellationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelQuantumTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cancellationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('quantumTaskArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createQuantumTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('quantumTaskArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceCapabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceQueueInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('queue'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuePriority'),
                    new \PHPStan\Type\Constant\ConstantStringType('queueSize'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUANTUM_TASKS_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JOBS_QUEUE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RETIRED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QPU'),
                    new \PHPStan\Type\Constant\ConstantStringType('SIMULATOR'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('algorithmSpecification'),
                new \PHPStan\Type\Constant\ConstantStringType('associations'),
                new \PHPStan\Type\Constant\ConstantStringType('billableDuration'),
                new \PHPStan\Type\Constant\ConstantStringType('checkpointConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('endedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('hyperParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('inputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('instanceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                new \PHPStan\Type\Constant\ConstantStringType('outputDataConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('queueInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('stoppingCondition'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('containerImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('scriptModeConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('compressionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('entryPoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('GZIP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('RESERVATION_TIME_WINDOW_ARN'),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('localPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeOfEvent'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WAITING_FOR_PRIORITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED_FOR_EXECUTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOWNLOADING_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRIORITIZED_DUE_TO_INACTIVITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPLOADING_RESULTS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_RUNTIME_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('channelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3DataSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Uri'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('instanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('volumeSizeInGb'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.10xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m4.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.g4dn.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.large'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.12xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.m5.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c4.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p2.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.8xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3.16xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p3dn.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.p4d.24xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5.18xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.2xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.4xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.9xlarge'),
                        new \PHPStan\Type\Constant\ConstantStringType('ml.c5n.18xlarge'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3Path'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('position'),
                    new \PHPStan\Type\Constant\ConstantStringType('queue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUANTUM_TASKS_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JOBS_QUEUE'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('maxRuntimeInSeconds'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getQuantumTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associations'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('deviceParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('endedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('outputS3Bucket'),
                new \PHPStan\Type\Constant\ConstantStringType('outputS3Directory'),
                new \PHPStan\Type\Constant\ConstantStringType('quantumTaskArn'),
                new \PHPStan\Type\Constant\ConstantStringType('queueInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('shots'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('RESERVATION_TIME_WINDOW_ARN'),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('position'),
                    new \PHPStan\Type\Constant\ConstantStringType('queue'),
                    new \PHPStan\Type\Constant\ConstantStringType('queuePriority'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUANTUM_TASKS_QUEUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('JOBS_QUEUE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Normal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function searchDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('devices'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ONLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFFLINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETIRED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIMULATOR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('device'),
                    new \PHPStan\Type\Constant\ConstantStringType('endedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobName'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchQuantumTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('quantumTasks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('endedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Bucket'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputS3Directory'),
                    new \PHPStan\Type\Constant\ConstantStringType('quantumTaskArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('shots'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
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
}