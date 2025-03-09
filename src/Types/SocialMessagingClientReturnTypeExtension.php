<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class SocialMessagingClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\SocialMessaging\SocialMessagingClient>
     */
    public function getClass(): string
    {
        return \Aws\SocialMessaging\SocialMessagingClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateWhatsAppBusinessAccount',
            'deleteWhatsAppMessageMedia',
            'disassociateWhatsAppBusinessAccount',
            'getLinkedWhatsAppBusinessAccount',
            'getLinkedWhatsAppBusinessAccountPhoneNumber',
            'getWhatsAppMessageMedia',
            'listLinkedWhatsAppBusinessAccounts',
            'listTagsForResource',
            'postWhatsAppMessageMedia',
            'putWhatsAppBusinessAccountEventDestinations',
            'sendWhatsAppMessage',
            'tagResource',
            'untagResource',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateWhatsAppBusinessAccount' => $this->associateWhatsAppBusinessAccount(),
            'deleteWhatsAppMessageMedia' => $this->deleteWhatsAppMessageMedia(),
            'disassociateWhatsAppBusinessAccount' => $this->disassociateWhatsAppBusinessAccount(),
            'getLinkedWhatsAppBusinessAccount' => $this->getLinkedWhatsAppBusinessAccount(),
            'getLinkedWhatsAppBusinessAccountPhoneNumber' => $this->getLinkedWhatsAppBusinessAccountPhoneNumber(),
            'getWhatsAppMessageMedia' => $this->getWhatsAppMessageMedia(),
            'listLinkedWhatsAppBusinessAccounts' => $this->listLinkedWhatsAppBusinessAccounts(),
            'listTagsForResource' => $this->listTagsForResource(),
            'postWhatsAppMessageMedia' => $this->postWhatsAppMessageMedia(),
            'putWhatsAppBusinessAccountEventDestinations' => $this->putWhatsAppBusinessAccountEventDestinations(),
            'sendWhatsAppMessage' => $this->sendWhatsAppMessage(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
        };
    }
    private function associateWhatsAppBusinessAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('signupCallbackResult'),
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associateInProgressToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkedAccountsWithIncompleteSetup'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountName'),
                        new \PHPStan\Type\Constant\ConstantStringType('registrationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('unregisteredWhatsAppPhoneNumbers'),
                        new \PHPStan\Type\Constant\ConstantStringType('wabaId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('phoneNumberId'),
                            new \PHPStan\Type\Constant\ConstantStringType('metaPhoneNumberId'),
                            new \PHPStan\Type\Constant\ConstantStringType('displayPhoneNumberName'),
                            new \PHPStan\Type\Constant\ConstantStringType('displayPhoneNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('qualityRating'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function deleteWhatsAppMessageMedia(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('success'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function disassociateWhatsAppBusinessAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getLinkedWhatsAppBusinessAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('account'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('wabaId'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('wabaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('phoneNumbers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventDestinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('phoneNumberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('metaPhoneNumberId'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayPhoneNumberName'),
                        new \PHPStan\Type\Constant\ConstantStringType('displayPhoneNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('qualityRating'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getLinkedWhatsAppBusinessAccountPhoneNumber(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('linkedWhatsAppBusinessAccountId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('phoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('phoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('metaPhoneNumberId'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayPhoneNumberName'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayPhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('qualityRating'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWhatsAppMessageMedia(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mimeType'),
                new \PHPStan\Type\Constant\ConstantStringType('fileSize'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listLinkedWhatsAppBusinessAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('linkedAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('wabaId'),
                    new \PHPStan\Type\Constant\ConstantStringType('registrationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('linkDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('wabaName'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventDestinations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INCOMPLETE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventDestinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function postWhatsAppMessageMedia(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mediaId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putWhatsAppBusinessAccountEventDestinations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function sendWhatsAppMessage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messageId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
}