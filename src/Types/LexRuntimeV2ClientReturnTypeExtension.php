<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LexRuntimeV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LexRuntimeV2\LexRuntimeV2Client>
     */
    public function getClass(): string
    {
        return \Aws\LexRuntimeV2\LexRuntimeV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deleteSession',
            'getSession',
            'putSession',
            'recognizeText',
            'recognizeUtterance',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deleteSession' => $this->deleteSession(),
            'getSession' => $this->getSession(),
            'putSession' => $this->putSession(),
            'recognizeText' => $this->recognizeText(),
            'recognizeUtterance' => $this->recognizeUtterance(),
        };
    }
    private function deleteSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('botId'),
                new \PHPStan\Type\Constant\ConstantStringType('botAliasId'),
                new \PHPStan\Type\Constant\ConstantStringType('localeId'),
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
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                new \PHPStan\Type\Constant\ConstantStringType('interpretations'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageResponseCard'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageResponseCard'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('subtitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('buttons'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nluConfidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('sentimentResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('intent'),
                    new \PHPStan\Type\Constant\ConstantStringType('interpretationSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sentiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('sentimentScore'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MIXED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('positive'),
                            new \PHPStan\Type\Constant\ConstantStringType('negative'),
                            new \PHPStan\Type\Constant\ConstantStringType('neutral'),
                            new \PHPStan\Type\Constant\ConstantStringType('mixed'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('shape'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlots'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('originalValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('interpretedValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('resolvedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scalar'),
                                new \PHPStan\Type\Constant\ConstantStringType('List'),
                                new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                            new \PHPStan\Type\Constant\ConstantStringType('FulfillmentInProgress'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Confirmed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Denied'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bedrock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dialogAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('intent'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeContexts'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('originatingRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimeHints'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                        new \PHPStan\Type\Constant\ConstantStringType('slotElicitationStyle'),
                        new \PHPStan\Type\Constant\ConstantStringType('subSlotToElicit'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Close'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Delegate'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Default'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpellByLetter'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpellByWord'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlotToElicit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('shape'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlots'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('originalValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('interpretedValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('resolvedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scalar'),
                                new \PHPStan\Type\Constant\ConstantStringType('List'),
                                new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                            new \PHPStan\Type\Constant\ConstantStringType('FulfillmentInProgress'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Confirmed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Denied'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeToLive'),
                        new \PHPStan\Type\Constant\ConstantStringType('contextAttributes'),
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
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('slotHints'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runtimeHintValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlotHints'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('phrase'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\MixedType(),
                        ]))),
                    ]),
                ]),
            ]),
        ]);
    }
    private function putSession(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionState'),
                new \PHPStan\Type\Constant\ConstantStringType('requestAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('audioStream'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function recognizeText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionState'),
                new \PHPStan\Type\Constant\ConstantStringType('interpretations'),
                new \PHPStan\Type\Constant\ConstantStringType('requestAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('recognizedBotMember'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('content'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageResponseCard'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomPayload'),
                        new \PHPStan\Type\Constant\ConstantStringType('ImageResponseCard'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlainText'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSML'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('title'),
                        new \PHPStan\Type\Constant\ConstantStringType('subtitle'),
                        new \PHPStan\Type\Constant\ConstantStringType('imageUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('buttons'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dialogAction'),
                    new \PHPStan\Type\Constant\ConstantStringType('intent'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeContexts'),
                    new \PHPStan\Type\Constant\ConstantStringType('sessionAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('originatingRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtimeHints'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('slotToElicit'),
                        new \PHPStan\Type\Constant\ConstantStringType('slotElicitationStyle'),
                        new \PHPStan\Type\Constant\ConstantStringType('subSlotToElicit'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Close'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfirmIntent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Delegate'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElicitIntent'),
                            new \PHPStan\Type\Constant\ConstantStringType('ElicitSlot'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Default'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpellByLetter'),
                            new \PHPStan\Type\Constant\ConstantStringType('SpellByWord'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlotToElicit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\MixedType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('shape'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlots'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('originalValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('interpretedValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('resolvedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scalar'),
                                new \PHPStan\Type\Constant\ConstantStringType('List'),
                                new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                            new \PHPStan\Type\Constant\ConstantStringType('FulfillmentInProgress'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Confirmed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Denied'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeToLive'),
                        new \PHPStan\Type\Constant\ConstantStringType('contextAttributes'),
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
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('slotHints'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('runtimeHintValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlotHints'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('phrase'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\MixedType(),
                        ]))),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nluConfidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('sentimentResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('intent'),
                    new \PHPStan\Type\Constant\ConstantStringType('interpretationSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('score'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('sentiment'),
                        new \PHPStan\Type\Constant\ConstantStringType('sentimentScore'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MIXED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEGATIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NEUTRAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('POSITIVE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('positive'),
                            new \PHPStan\Type\Constant\ConstantStringType('negative'),
                            new \PHPStan\Type\Constant\ConstantStringType('neutral'),
                            new \PHPStan\Type\Constant\ConstantStringType('mixed'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('slots'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('confirmationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('shape'),
                            new \PHPStan\Type\Constant\ConstantStringType('values'),
                            new \PHPStan\Type\Constant\ConstantStringType('subSlots'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('originalValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('interpretedValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('resolvedValues'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Scalar'),
                                new \PHPStan\Type\Constant\ConstantStringType('List'),
                                new \PHPStan\Type\Constant\ConstantStringType('Composite'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                            new \PHPStan\Type\MixedType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Fulfilled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReadyForFulfillment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Waiting'),
                            new \PHPStan\Type\Constant\ConstantStringType('FulfillmentInProgress'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Confirmed'),
                            new \PHPStan\Type\Constant\ConstantStringType('Denied'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Bedrock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('botId'),
                    new \PHPStan\Type\Constant\ConstantStringType('botName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function recognizeUtterance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('inputMode'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                new \PHPStan\Type\Constant\ConstantStringType('interpretations'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionState'),
                new \PHPStan\Type\Constant\ConstantStringType('requestAttributes'),
                new \PHPStan\Type\Constant\ConstantStringType('sessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('inputTranscript'),
                new \PHPStan\Type\Constant\ConstantStringType('audioStream'),
                new \PHPStan\Type\Constant\ConstantStringType('recognizedBotMember'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}