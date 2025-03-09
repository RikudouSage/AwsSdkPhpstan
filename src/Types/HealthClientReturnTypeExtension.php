<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class HealthClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Health\HealthClient>
     */
    public function getClass(): string
    {
        return \Aws\Health\HealthClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'describeAffectedAccountsForOrganization',
            'describeAffectedEntities',
            'describeAffectedEntitiesForOrganization',
            'describeEntityAggregates',
            'describeEntityAggregatesForOrganization',
            'describeEventAggregates',
            'describeEventDetails',
            'describeEventDetailsForOrganization',
            'describeEventTypes',
            'describeEvents',
            'describeEventsForOrganization',
            'describeHealthServiceStatusForOrganization',
            'disableHealthServiceAccessForOrganization',
            'enableHealthServiceAccessForOrganization',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'describeAffectedAccountsForOrganization' => $this->describeAffectedAccountsForOrganization(),
            'describeAffectedEntities' => $this->describeAffectedEntities(),
            'describeAffectedEntitiesForOrganization' => $this->describeAffectedEntitiesForOrganization(),
            'describeEntityAggregates' => $this->describeEntityAggregates(),
            'describeEntityAggregatesForOrganization' => $this->describeEntityAggregatesForOrganization(),
            'describeEventAggregates' => $this->describeEventAggregates(),
            'describeEventDetails' => $this->describeEventDetails(),
            'describeEventDetailsForOrganization' => $this->describeEventDetailsForOrganization(),
            'describeEventTypes' => $this->describeEventTypes(),
            'describeEvents' => $this->describeEvents(),
            'describeEventsForOrganization' => $this->describeEventsForOrganization(),
            'describeHealthServiceStatusForOrganization' => $this->describeHealthServiceStatusForOrganization(),
            'disableHealthServiceAccessForOrganization' => $this->disableHealthServiceAccessForOrganization(),
            'enableHealthServiceAccessForOrganization' => $this->enableHealthServiceAccessForOrganization(),
        };
    }
    private function describeAffectedAccountsForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('affectedAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('eventScopeCode'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SPECIFIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAffectedEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entities'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeAffectedEntitiesForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entities'),
                new \PHPStan\Type\Constant\ConstantStringType('failedSet'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEntityAggregates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('entityAggregates'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('statuses'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]), new \PHPStan\Type\IntegerType()),
                ])),
            ]),
        ]);
    }
    private function describeEntityAggregatesForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('organizationEntityAggregates'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                    new \PHPStan\Type\Constant\ConstantStringType('statuses'),
                    new \PHPStan\Type\Constant\ConstantStringType('accounts'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNIMPAIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]), new \PHPStan\Type\IntegerType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('count'),
                        new \PHPStan\Type\Constant\ConstantStringType('statuses'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNIMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                        ]), new \PHPStan\Type\IntegerType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeEventAggregates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventAggregates'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('aggregateValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('count'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEventDetails(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulSet'),
                new \PHPStan\Type\Constant\ConstantStringType('failedSet'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('event'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventMetadata'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('service'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeCategory'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventScopeCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('issue'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountNotification'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledChange'),
                            new \PHPStan\Type\Constant\ConstantStringType('investigation'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('open'),
                            new \PHPStan\Type\Constant\ConstantStringType('closed'),
                            new \PHPStan\Type\Constant\ConstantStringType('upcoming'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SPECIFIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latestDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeEventDetailsForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successfulSet'),
                new \PHPStan\Type\Constant\ConstantStringType('failedSet'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('event'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('service'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventTypeCategory'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventScopeCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('issue'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountNotification'),
                            new \PHPStan\Type\Constant\ConstantStringType('scheduledChange'),
                            new \PHPStan\Type\Constant\ConstantStringType('investigation'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('open'),
                            new \PHPStan\Type\Constant\ConstantStringType('closed'),
                            new \PHPStan\Type\Constant\ConstantStringType('upcoming'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SPECIFIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('latestDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeEventTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('eventTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('issue'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountNotification'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('investigation'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTypeCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTypeCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventScopeCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('issue'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountNotification'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('investigation'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('open'),
                        new \PHPStan\Type\Constant\ConstantStringType('closed'),
                        new \PHPStan\Type\Constant\ConstantStringType('upcoming'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SPECIFIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeEventsForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('events'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTypeCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventTypeCategory'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventScopeCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('issue'),
                        new \PHPStan\Type\Constant\ConstantStringType('accountNotification'),
                        new \PHPStan\Type\Constant\ConstantStringType('scheduledChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('investigation'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT_SPECIFIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('open'),
                        new \PHPStan\Type\Constant\ConstantStringType('closed'),
                        new \PHPStan\Type\Constant\ConstantStringType('upcoming'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeHealthServiceStatusForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('healthServiceAccessStatusForOrganization'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disableHealthServiceAccessForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableHealthServiceAccessForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
}