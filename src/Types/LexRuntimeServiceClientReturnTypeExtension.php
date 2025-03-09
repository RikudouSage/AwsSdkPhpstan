<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LexRuntimeServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LexRuntimeService\LexRuntimeServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\LexRuntimeService\LexRuntimeServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteSession',
            'getSession',
            'postContent',
            'postText',
            'putSession',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteSession' => $this->deleteSession(),
            'getSession' => $this->getSession(),
            'postContent' => $this->postContent(),
            'postText' => $this->postText(),
            'putSession' => $this->putSession(),
        };
    }
    private function deleteSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('botName'),
                new \PHPStan\Type\Constant\ConstantStringType('botAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('userId'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recentIntentSummaryView'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogAction'),
                new \PHPStan\Type\Constant\ConstantStringType('activeContexts'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('checkpointLabel'),
                        new \PHPStan\Type\Constant\ConstantStringType('slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('dialogActionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('fulfillmentState'),
                        new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Confirmed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Denied'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                            new \PHPStan\Type\Constant\ConstantStringType('Close'),
                            new \PHPStan\Type\Constant\ConstantStringType('Delegate'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('slots'),
                    new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                    new \PHPStan\Type\Constant\ConstantStringType('fulfillmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('messageFormat'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                        new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                        new \PHPStan\Type\Constant\ConstantStringType('Close'),
                        new \PHPStan\Type\Constant\ConstantStringType('Delegate'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                        new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeToLive'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeToLiveInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('turnsToLive'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function postContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                new \PHPStan\Type\Constant\ConstantStringType('nluIntentConfidence'),
                new \PHPStan\Type\Constant\ConstantStringType('alternativeIntents'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('sentimentResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('encodedMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('messageFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogState'),
                new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                new \PHPStan\Type\Constant\ConstantStringType('inputTranscript'),
                new \PHPStan\Type\Constant\ConstantStringType('encodedInputTranscript'),
                new \PHPStan\Type\Constant\ConstantStringType('audioStream'),
                new \PHPStan\Type\Constant\ConstantStringType('botVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('activeContexts'),
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
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                    new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function postText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                new \PHPStan\Type\Constant\ConstantStringType('nluIntentConfidence'),
                new \PHPStan\Type\Constant\ConstantStringType('alternativeIntents'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('sentimentResponse'),
                new \PHPStan\Type\Constant\ConstantStringType('messageFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogState'),
                new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                new \PHPStan\Type\Constant\ConstantStringType('responseCard'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('botVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('activeContexts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('score'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('nluIntentConfidence'),
                        new \PHPStan\Type\Constant\ConstantStringType('slots'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('sentimentLabel'),
                    new \PHPStan\Type\Constant\ConstantStringType('sentimentScore'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                    new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('genericAttachments'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('application/vnd.amazonaws.card.generic'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                            new \PHPStan\Type\Constant\ConstantStringType('subTitle'),
                            new \PHPStan\Type\Constant\ConstantStringType('attachmentLinkUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageUrl'),
                            new \PHPStan\Type\Constant\ConstantStringType('buttons'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeToLive'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('timeToLiveInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('turnsToLive'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('intentName'),
                new \PHPStan\Type\Constant\ConstantStringType('slots'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('encodedMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('messageFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('dialogState'),
                new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                new \PHPStan\Type\Constant\ConstantStringType('audioStream'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('activeContexts'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                    new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}