<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTEventsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTEvents\IoTEventsClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTEvents\IoTEventsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAlarmModel',
            'createDetectorModel',
            'createInput',
            'deleteAlarmModel',
            'deleteDetectorModel',
            'deleteInput',
            'describeAlarmModel',
            'describeDetectorModel',
            'describeDetectorModelAnalysis',
            'describeInput',
            'describeLoggingOptions',
            'getDetectorModelAnalysisResults',
            'listAlarmModelVersions',
            'listAlarmModels',
            'listDetectorModelVersions',
            'listDetectorModels',
            'listInputRoutings',
            'listInputs',
            'listTagsForResource',
            'putLoggingOptions',
            'startDetectorModelAnalysis',
            'tagResource',
            'untagResource',
            'updateAlarmModel',
            'updateDetectorModel',
            'updateInput',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAlarmModel' => $this->createAlarmModel(),
            'createDetectorModel' => $this->createDetectorModel(),
            'createInput' => $this->createInput(),
            'deleteAlarmModel' => $this->deleteAlarmModel(),
            'deleteDetectorModel' => $this->deleteDetectorModel(),
            'deleteInput' => $this->deleteInput(),
            'describeAlarmModel' => $this->describeAlarmModel(),
            'describeDetectorModel' => $this->describeDetectorModel(),
            'describeDetectorModelAnalysis' => $this->describeDetectorModelAnalysis(),
            'describeInput' => $this->describeInput(),
            'describeLoggingOptions' => $this->describeLoggingOptions(),
            'getDetectorModelAnalysisResults' => $this->getDetectorModelAnalysisResults(),
            'listAlarmModelVersions' => $this->listAlarmModelVersions(),
            'listAlarmModels' => $this->listAlarmModels(),
            'listDetectorModelVersions' => $this->listDetectorModelVersions(),
            'listDetectorModels' => $this->listDetectorModels(),
            'listInputRoutings' => $this->listInputRoutings(),
            'listInputs' => $this->listInputs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putLoggingOptions' => $this->putLoggingOptions(),
            'startDetectorModelAnalysis' => $this->startDetectorModelAnalysis(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAlarmModel' => $this->updateAlarmModel(),
            'updateDetectorModel' => $this->updateDetectorModel(),
            'updateInput' => $this->updateInput(),
        };
    }
    private function createAlarmModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createDetectorModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorModelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('evaluationMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERIAL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createInput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inputConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAlarmModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDetectorModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteInput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAlarmModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelName'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('key'),
                new \PHPStan\Type\Constant\ConstantStringType('severity'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmRule'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmNotification'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmEventActions'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmCapabilities'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('simpleRule'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputProperty'),
                        new \PHPStan\Type\Constant\ConstantStringType('comparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('threshold'),
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
                    new \PHPStan\Type\Constant\ConstantStringType('notificationActions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('smsConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('emailConfigurations'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaAction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('payload'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('senderId'),
                            new \PHPStan\Type\Constant\ConstantStringType('additionalMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('recipients'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ssoIdentity'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('identityStoreId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('from'),
                            new \PHPStan\Type\Constant\ConstantStringType('content'),
                            new \PHPStan\Type\Constant\ConstantStringType('recipients'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('subject'),
                                new \PHPStan\Type\Constant\ConstantStringType('additionalMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('to'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ssoIdentity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('identityStoreId'),
                                        new \PHPStan\Type\Constant\ConstantStringType('userId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alarmActions'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sns'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotTopicPublish'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                        new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                        new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                            new \PHPStan\Type\Constant\ConstantStringType('separator'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                            new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
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
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                            new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                            new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                            new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                new \PHPStan\Type\Constant\ConstantStringType('quality'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('initializationConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('acknowledgeFlow'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('disabledOnInitialization'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDetectorModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorModel'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelDefinition'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('states'),
                        new \PHPStan\Type\Constant\ConstantStringType('initialStateName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('stateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('onInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('onEnter'),
                            new \PHPStan\Type\Constant\ConstantStringType('onExit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('events'),
                                new \PHPStan\Type\Constant\ConstantStringType('transitionEvents'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('setVariable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sns'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotTopicPublish'),
                                        new \PHPStan\Type\Constant\ConstantStringType('setTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clearTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resetTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('variableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('durationExpression'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('separator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
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
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('quality'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('nextState'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('setVariable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sns'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotTopicPublish'),
                                        new \PHPStan\Type\Constant\ConstantStringType('setTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clearTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resetTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('variableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('durationExpression'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('separator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
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
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('quality'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('events'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('setVariable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sns'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotTopicPublish'),
                                        new \PHPStan\Type\Constant\ConstantStringType('setTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clearTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resetTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('variableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('durationExpression'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('separator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
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
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('quality'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('events'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('eventName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('condition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('setVariable'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sns'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotTopicPublish'),
                                        new \PHPStan\Type\Constant\ConstantStringType('setTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('clearTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resetTimer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotEvents'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sqs'),
                                        new \PHPStan\Type\Constant\ConstantStringType('firehose'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDB'),
                                        new \PHPStan\Type\Constant\ConstantStringType('dynamoDBv2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('iotSiteWise'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('variableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('mqttTopic'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('seconds'),
                                            new \PHPStan\Type\Constant\ConstantStringType('durationExpression'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('timerName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('queueUrl'),
                                            new \PHPStan\Type\Constant\ConstantStringType('useBase64'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('deliveryStreamName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('separator'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('hashKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyType'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('rangeKeyValue'),
                                            new \PHPStan\Type\Constant\ConstantStringType('operation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payloadField'),
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
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
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                                            new \PHPStan\Type\Constant\ConstantStringType('payload'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('contentExpression'),
                                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('STRING'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                                                ]),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('entryId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('assetId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyId'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyAlias'),
                                            new \PHPStan\Type\Constant\ConstantStringType('propertyValue'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                                new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                                                new \PHPStan\Type\Constant\ConstantStringType('quality'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('stringValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('integerValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('doubleValue'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('booleanValue'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('timeInSeconds'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('offsetInNanos'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorModelDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('detectorModelArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('evaluationMethod'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERIAL'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDetectorModelAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function describeInput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('input'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputDefinition'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('inputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('jsonPath'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('loggingOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorDebugOptions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDetectorModelAnalysisResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisResults'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('level'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('locations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAlarmModelVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAlarmModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('alarmModelName'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDetectorModelVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('evaluationMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERIAL'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDetectorModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorModelSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInputRoutings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('routedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inputSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putLoggingOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startDetectorModelAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('analysisId'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateAlarmModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelArn'),
                new \PHPStan\Type\Constant\ConstantStringType('alarmModelVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateDetectorModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('detectorModelConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelName'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('detectorModelArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('evaluationMethod'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PAUSED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERIAL'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateInput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inputConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('inputName'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                ]),
            ]),
        ]);
    }
}