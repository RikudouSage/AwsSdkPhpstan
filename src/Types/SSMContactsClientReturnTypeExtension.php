<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SSMContactsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SSMContacts\SSMContactsClient>
     */
    public function getClass(): string
    {
        return \Aws\SSMContacts\SSMContactsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptPage',
            'activateContactChannel',
            'createContact',
            'createContactChannel',
            'createRotation',
            'createRotationOverride',
            'deactivateContactChannel',
            'deleteContact',
            'deleteContactChannel',
            'deleteRotation',
            'deleteRotationOverride',
            'describeEngagement',
            'describePage',
            'getContact',
            'getContactChannel',
            'getContactPolicy',
            'getRotation',
            'getRotationOverride',
            'listContactChannels',
            'listContacts',
            'listEngagements',
            'listPageReceipts',
            'listPageResolutions',
            'listPagesByContact',
            'listPagesByEngagement',
            'listPreviewRotationShifts',
            'listRotationOverrides',
            'listRotationShifts',
            'listRotations',
            'listTagsForResource',
            'putContactPolicy',
            'sendActivationCode',
            'startEngagement',
            'stopEngagement',
            'tagResource',
            'untagResource',
            'updateContact',
            'updateContactChannel',
            'updateRotation',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptPage' => $this->acceptPage(),
            'activateContactChannel' => $this->activateContactChannel(),
            'createContact' => $this->createContact(),
            'createContactChannel' => $this->createContactChannel(),
            'createRotation' => $this->createRotation(),
            'createRotationOverride' => $this->createRotationOverride(),
            'deactivateContactChannel' => $this->deactivateContactChannel(),
            'deleteContact' => $this->deleteContact(),
            'deleteContactChannel' => $this->deleteContactChannel(),
            'deleteRotation' => $this->deleteRotation(),
            'deleteRotationOverride' => $this->deleteRotationOverride(),
            'describeEngagement' => $this->describeEngagement(),
            'describePage' => $this->describePage(),
            'getContact' => $this->getContact(),
            'getContactChannel' => $this->getContactChannel(),
            'getContactPolicy' => $this->getContactPolicy(),
            'getRotation' => $this->getRotation(),
            'getRotationOverride' => $this->getRotationOverride(),
            'listContactChannels' => $this->listContactChannels(),
            'listContacts' => $this->listContacts(),
            'listEngagements' => $this->listEngagements(),
            'listPageReceipts' => $this->listPageReceipts(),
            'listPageResolutions' => $this->listPageResolutions(),
            'listPagesByContact' => $this->listPagesByContact(),
            'listPagesByEngagement' => $this->listPagesByEngagement(),
            'listPreviewRotationShifts' => $this->listPreviewRotationShifts(),
            'listRotationOverrides' => $this->listRotationOverrides(),
            'listRotationShifts' => $this->listRotationShifts(),
            'listRotations' => $this->listRotations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putContactPolicy' => $this->putContactPolicy(),
            'sendActivationCode' => $this->sendActivationCode(),
            'startEngagement' => $this->startEngagement(),
            'stopEngagement' => $this->stopEngagement(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateContact' => $this->updateContact(),
            'updateContactChannel' => $this->updateContactChannel(),
            'updateRotation' => $this->updateRotation(),
        };
    }
    private function acceptPage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function activateContactChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContactChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactChannelArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRotation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRotationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationOverrideId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deactivateContactChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteContactChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRotation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRotationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeEngagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EngagementArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicSubject'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicContent'),
                new \PHPStan\Type\Constant\ConstantStringType('IncidentId'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('StopTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describePage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PageArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EngagementArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                new \PHPStan\Type\Constant\ConstantStringType('Subject'),
                new \PHPStan\Type\Constant\ConstantStringType('Content'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicSubject'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicContent'),
                new \PHPStan\Type\Constant\ConstantStringType('IncidentId'),
                new \PHPStan\Type\Constant\ConstantStringType('SentTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ReadTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryTime'),
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
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('Plan'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PERSONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ESCALATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONCALL_SCHEDULE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Stages'),
                    new \PHPStan\Type\Constant\ConstantStringType('RotationIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DurationInMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChannelTargetInfo'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContactTargetInfo'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContactChannelId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RetryIntervalInMinutes'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                                new \PHPStan\Type\Constant\ConstantStringType('IsEssential'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getContactChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactChannelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('DeliveryAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('ActivationStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                    new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SimpleAddress'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_ACTIVATED'),
                ]),
            ]),
        ]);
    }
    private function getContactPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRotation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactIds'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('Recurrence'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MonthlySettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('WeeklySettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('DailySettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfOnCalls'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShiftCoverages'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurrenceMultiplier'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfMonth'),
                        new \PHPStan\Type\Constant\ConstantStringType('HandOffTime'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                        new \PHPStan\Type\Constant\ConstantStringType('HandOffTime'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MON'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WED'),
                            new \PHPStan\Type\Constant\ConstantStringType('THU'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MON'),
                        new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('WED'),
                        new \PHPStan\Type\Constant\ConstantStringType('THU'),
                        new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                    ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Start'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]))),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getRotationOverride(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationOverrideId'),
                new \PHPStan\Type\Constant\ConstantStringType('RotationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('NewContactIds'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listContactChannels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ContactChannels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActivationStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                        new \PHPStan\Type\Constant\ConstantStringType('VOICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SimpleAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ACTIVATED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listContacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PERSONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ESCALATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONCALL_SCHEDULE'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEngagements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Engagements'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EngagementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncidentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StopTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listPageReceipts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Receipts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactChannelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiptType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiptInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceiptTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELIVERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('READ'),
                        new \PHPStan\Type\Constant\ConstantStringType('SENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listPageResolutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PageResolutions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageIndex'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PERSONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ESCALATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ONCALL_SCHEDULE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function listPagesByContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Pages'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngagementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncidentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SentTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listPagesByEngagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Pages'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PageArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngagementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sender'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncidentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SentTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeliveryTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listPreviewRotationShifts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationShifts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShiftDetails'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OverriddenContactIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRotationOverrides(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationOverrides'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RotationOverrideId'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewContactIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRotationShifts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RotationShifts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContactIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShiftDetails'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGULAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('OVERRIDDEN'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OverriddenContactIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRotations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Rotations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RotationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContactIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Recurrence'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MonthlySettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('WeeklySettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('DailySettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('NumberOfOnCalls'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShiftCoverages'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurrenceMultiplier'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DayOfMonth'),
                            new \PHPStan\Type\Constant\ConstantStringType('HandOffTime'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DayOfWeek'),
                            new \PHPStan\Type\Constant\ConstantStringType('HandOffTime'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MON'),
                                new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('WED'),
                                new \PHPStan\Type\Constant\ConstantStringType('THU'),
                                new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MON'),
                            new \PHPStan\Type\Constant\ConstantStringType('TUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WED'),
                            new \PHPStan\Type\Constant\ConstantStringType('THU'),
                            new \PHPStan\Type\Constant\ConstantStringType('FRI'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUN'),
                        ]), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Start'),
                            new \PHPStan\Type\Constant\ConstantStringType('End'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HourOfDay'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinuteOfHour'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]))),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putContactPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendActivationCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startEngagement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EngagementArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopEngagement(): ?\PHPStan\Type\Type
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
    private function updateContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateContactChannel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateRotation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}