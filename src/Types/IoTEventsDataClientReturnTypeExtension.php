<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTEventsDataClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTEventsData\IoTEventsDataClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTEventsData\IoTEventsDataClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchAcknowledgeAlarm',
            'batchDeleteDetector',
            'batchDisableAlarm',
            'batchEnableAlarm',
            'batchPutMessage',
            'batchResetAlarm',
            'batchSnoozeAlarm',
            'batchUpdateDetector',
            'describeAlarm',
            'describeDetector',
            'listAlarms',
            'listDetectors',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchAcknowledgeAlarm' => $this->batchAcknowledgeAlarm(),
            'batchDeleteDetector' => $this->batchDeleteDetector(),
            'batchDisableAlarm' => $this->batchDisableAlarm(),
            'batchEnableAlarm' => $this->batchEnableAlarm(),
            'batchPutMessage' => $this->batchPutMessage(),
            'batchResetAlarm' => $this->batchResetAlarm(),
            'batchSnoozeAlarm' => $this->batchSnoozeAlarm(),
            'batchUpdateDetector' => $this->batchUpdateDetector(),
            'describeAlarm' => $this->describeAlarm(),
            'describeDetector' => $this->describeDetector(),
            'listAlarms' => $this->listAlarms(),
            'listDetectors' => $this->listDetectors(),
        };
    }
    private function batchAcknowledgeAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDeleteDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('batchDeleteDetectorErrorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchDisableAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchEnableAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchPutMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BatchPutMessageErrorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchResetAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchSnoozeAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function batchUpdateDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('batchUpdateDetectorErrorEntries'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InvalidRequestException'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalFailureException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceUnavailableException'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingException'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAlarm(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('alarm'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmState'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleEvaluation'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemEvent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNOOZE_DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATCHED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('simpleRuleEvaluation'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('inputPropertyValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('operator'),
                                new \PHPStan\Type\Constant\ConstantStringType('thresholdValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('GREATER_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LESS_OR_EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EQUAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionName'),
                            new \PHPStan\Type\Constant\ConstantStringType('snoozeActionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('enableActionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('disableActionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('acknowledgeActionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('resetActionConfiguration'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SNOOZE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESET'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('snoozeDuration'),
                                new \PHPStan\Type\Constant\ConstantStringType('note'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('note'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('note'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('note'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('note'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                            new \PHPStan\Type\Constant\ConstantStringType('stateChangeConfiguration'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('STATE_CHANGE'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('triggerType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('SNOOZE_TIMEOUT'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeDetector(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detector'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('variables'),
                        new \PHPStan\Type\Constant\ConstantStringType('timers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listAlarms(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('alarmSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NORMAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SNOOZE_DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LATCHED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDetectors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}