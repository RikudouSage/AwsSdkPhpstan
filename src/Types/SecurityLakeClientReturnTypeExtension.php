<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SecurityLakeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SecurityLake\SecurityLakeClient>
     */
    public function getClass(): string
    {
        return \Aws\SecurityLake\SecurityLakeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAwsLogSource',
            'createCustomLogSource',
            'createDataLake',
            'createDataLakeExceptionSubscription',
            'createDataLakeOrganizationConfiguration',
            'createSubscriber',
            'createSubscriberNotification',
            'deleteAwsLogSource',
            'deleteCustomLogSource',
            'deleteDataLake',
            'deleteDataLakeExceptionSubscription',
            'deleteDataLakeOrganizationConfiguration',
            'deleteSubscriber',
            'deleteSubscriberNotification',
            'deregisterDataLakeDelegatedAdministrator',
            'getDataLakeExceptionSubscription',
            'getDataLakeOrganizationConfiguration',
            'getDataLakeSources',
            'getSubscriber',
            'listDataLakeExceptions',
            'listDataLakes',
            'listLogSources',
            'listSubscribers',
            'listTagsForResource',
            'registerDataLakeDelegatedAdministrator',
            'tagResource',
            'untagResource',
            'updateDataLake',
            'updateDataLakeExceptionSubscription',
            'updateSubscriber',
            'updateSubscriberNotification',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAwsLogSource' => $this->createAwsLogSource(),
            'createCustomLogSource' => $this->createCustomLogSource(),
            'createDataLake' => $this->createDataLake(),
            'createDataLakeExceptionSubscription' => $this->createDataLakeExceptionSubscription(),
            'createDataLakeOrganizationConfiguration' => $this->createDataLakeOrganizationConfiguration(),
            'createSubscriber' => $this->createSubscriber(),
            'createSubscriberNotification' => $this->createSubscriberNotification(),
            'deleteAwsLogSource' => $this->deleteAwsLogSource(),
            'deleteCustomLogSource' => $this->deleteCustomLogSource(),
            'deleteDataLake' => $this->deleteDataLake(),
            'deleteDataLakeExceptionSubscription' => $this->deleteDataLakeExceptionSubscription(),
            'deleteDataLakeOrganizationConfiguration' => $this->deleteDataLakeOrganizationConfiguration(),
            'deleteSubscriber' => $this->deleteSubscriber(),
            'deleteSubscriberNotification' => $this->deleteSubscriberNotification(),
            'deregisterDataLakeDelegatedAdministrator' => $this->deregisterDataLakeDelegatedAdministrator(),
            'getDataLakeExceptionSubscription' => $this->getDataLakeExceptionSubscription(),
            'getDataLakeOrganizationConfiguration' => $this->getDataLakeOrganizationConfiguration(),
            'getDataLakeSources' => $this->getDataLakeSources(),
            'getSubscriber' => $this->getSubscriber(),
            'listDataLakeExceptions' => $this->listDataLakeExceptions(),
            'listDataLakes' => $this->listDataLakes(),
            'listLogSources' => $this->listLogSources(),
            'listSubscribers' => $this->listSubscribers(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerDataLakeDelegatedAdministrator' => $this->registerDataLakeDelegatedAdministrator(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDataLake' => $this->updateDataLake(),
            'updateDataLakeExceptionSubscription' => $this->updateDataLakeExceptionSubscription(),
            'updateSubscriber' => $this->updateSubscriber(),
            'updateSubscriberNotification' => $this->updateSubscriberNotification(),
        };
    }
    private function createAwsLogSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failed'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createCustomLogSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('source'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('crawlerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('tableArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDataLake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataLakes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataLakeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('days'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('days'),
                                    new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('exception'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createDataLakeExceptionSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createDataLakeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceShareArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceShareName'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberName'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LAKEFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsLogSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('customLogSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_FLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SH_FINDINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL_MGMT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_EXECUTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('crawlerArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tableArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createSubscriberNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriberEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAwsLogSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('failed'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteCustomLogSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataLake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataLakeExceptionSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataLakeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSubscriberNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterDataLakeDelegatedAdministrator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getDataLakeExceptionSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exceptionTimeToLive'),
                new \PHPStan\Type\Constant\ConstantStringType('notificationEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('subscriptionProtocol'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDataLakeOrganizationConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('autoEnableNewAccount'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_FLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SH_FINDINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL_MGMT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_EXECUTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDataLakeSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataLakeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dataLakeSources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('account'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventClasses'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceStatuses'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('COLLECTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MISCONFIGURED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_COLLECTING'),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceShareArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceShareName'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberName'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LAKEFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsLogSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('customLogSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_FLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SH_FINDINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL_MGMT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_EXECUTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('crawlerArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tableArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listDataLakeExceptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('exceptions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('exception'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                    ], [
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
    private function listDataLakes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataLakes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataLakeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('days'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('days'),
                                    new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('exception'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listLogSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('sources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('account'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsLogSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('customLogSource'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VPC_FLOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SH_FINDINGS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL_MGMT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_EXECUTION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_DATA'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('crawlerArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tableArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listSubscribers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('subscribers'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accessTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceShareArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceShareName'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('sources'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberIdentity'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberName'),
                        new \PHPStan\Type\Constant\ConstantStringType('subscriberStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LAKEFORMATION'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3'),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsLogSource'),
                                new \PHPStan\Type\Constant\ConstantStringType('customLogSource'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VPC_FLOW'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SH_FINDINGS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL_MGMT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_EXECUTION'),
                                        new \PHPStan\Type\Constant\ConstantStringType('S3_DATA'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('crawlerArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tableArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                            new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function registerDataLakeDelegatedAdministrator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateDataLake(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataLakes'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataLakeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('replicationConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('expiration'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitions'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('days'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('days'),
                                    new \PHPStan\Type\Constant\ConstantStringType('storageClass'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('exception'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('code'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('INITIALIZED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function updateDataLakeExceptionSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSubscriber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriber'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accessTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceShareArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceShareName'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberName'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscriberStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LAKEFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3'),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsLogSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('customLogSource'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ROUTE53'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_FLOW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SH_FINDINGS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_TRAIL_MGMT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA_EXECUTION'),
                                    new \PHPStan\Type\Constant\ConstantStringType('S3_DATA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EKS_AUDIT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WAF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('provider'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('sourceVersion'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('crawlerArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('databaseArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tableArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateSubscriberNotification(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriberEndpoint'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}