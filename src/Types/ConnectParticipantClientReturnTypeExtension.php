<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ConnectParticipantClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ConnectParticipant\ConnectParticipantClient>
     */
    public function getClass(): string
    {
        return \Aws\ConnectParticipant\ConnectParticipantClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelParticipantAuthentication',
            'completeAttachmentUpload',
            'createParticipantConnection',
            'describeView',
            'disconnectParticipant',
            'getAttachment',
            'getAuthenticationUrl',
            'getTranscript',
            'sendEvent',
            'sendMessage',
            'startAttachmentUpload',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelParticipantAuthentication' => $this->cancelParticipantAuthentication(),
            'completeAttachmentUpload' => $this->completeAttachmentUpload(),
            'createParticipantConnection' => $this->createParticipantConnection(),
            'describeView' => $this->describeView(),
            'disconnectParticipant' => $this->disconnectParticipant(),
            'getAttachment' => $this->getAttachment(),
            'getAuthenticationUrl' => $this->getAuthenticationUrl(),
            'getTranscript' => $this->getTranscript(),
            'sendEvent' => $this->sendEvent(),
            'sendMessage' => $this->sendMessage(),
            'startAttachmentUpload' => $this->startAttachmentUpload(),
        };
    }
    private function cancelParticipantAuthentication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function completeAttachmentUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createParticipantConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Websocket'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionCredentials'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionExpiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiry'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('View'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Content'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InputSchema'),
                        new \PHPStan\Type\Constant\ConstantStringType('Template'),
                        new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disconnectParticipant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
                new \PHPStan\Type\Constant\ConstantStringType('UrlExpiry'),
                new \PHPStan\Type\Constant\ConstantStringType('AttachmentSizeInBytes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getAuthenticationUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthenticationUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTranscript(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InitialContactId'),
                new \PHPStan\Type\Constant\ConstantStringType('Transcript'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AbsoluteTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Content'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParticipantRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attachments'),
                        new \PHPStan\Type\Constant\ConstantStringType('MessageMetadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('RelatedContactId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContactId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TYPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTICIPANT_JOINED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTICIPANT_LEFT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHAT_ENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSFER_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSFER_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MESSAGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECTION_ACK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_DELIVERED'),
                            new \PHPStan\Type\Constant\ConstantStringType('MESSAGE_READ'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AGENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEM'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM_BOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUPERVISOR'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttachmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Receipts'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DeliveredTimestamp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReadTimestamp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RecipientParticipantId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('AbsoluteTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('AbsoluteTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startAttachmentUpload(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('UploadMetadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    new \PHPStan\Type\Constant\ConstantStringType('UrlExpiry'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeadersToInclude'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
}