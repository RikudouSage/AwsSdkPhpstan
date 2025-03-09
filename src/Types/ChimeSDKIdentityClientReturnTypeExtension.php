<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ChimeSDKIdentityClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ChimeSDKIdentity\ChimeSDKIdentityClient>
     */
    public function getClass(): string
    {
        return \Aws\ChimeSDKIdentity\ChimeSDKIdentityClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createAppInstance',
            'createAppInstanceAdmin',
            'createAppInstanceBot',
            'createAppInstanceUser',
            'deleteAppInstance',
            'deleteAppInstanceAdmin',
            'deleteAppInstanceBot',
            'deleteAppInstanceUser',
            'deregisterAppInstanceUserEndpoint',
            'describeAppInstance',
            'describeAppInstanceAdmin',
            'describeAppInstanceBot',
            'describeAppInstanceUser',
            'describeAppInstanceUserEndpoint',
            'getAppInstanceRetentionSettings',
            'listAppInstanceAdmins',
            'listAppInstanceBots',
            'listAppInstanceUserEndpoints',
            'listAppInstanceUsers',
            'listAppInstances',
            'listTagsForResource',
            'putAppInstanceRetentionSettings',
            'putAppInstanceUserExpirationSettings',
            'registerAppInstanceUserEndpoint',
            'tagResource',
            'untagResource',
            'updateAppInstance',
            'updateAppInstanceBot',
            'updateAppInstanceUser',
            'updateAppInstanceUserEndpoint',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createAppInstance' => $this->createAppInstance(),
            'createAppInstanceAdmin' => $this->createAppInstanceAdmin(),
            'createAppInstanceBot' => $this->createAppInstanceBot(),
            'createAppInstanceUser' => $this->createAppInstanceUser(),
            'deleteAppInstance' => $this->deleteAppInstance(),
            'deleteAppInstanceAdmin' => $this->deleteAppInstanceAdmin(),
            'deleteAppInstanceBot' => $this->deleteAppInstanceBot(),
            'deleteAppInstanceUser' => $this->deleteAppInstanceUser(),
            'deregisterAppInstanceUserEndpoint' => $this->deregisterAppInstanceUserEndpoint(),
            'describeAppInstance' => $this->describeAppInstance(),
            'describeAppInstanceAdmin' => $this->describeAppInstanceAdmin(),
            'describeAppInstanceBot' => $this->describeAppInstanceBot(),
            'describeAppInstanceUser' => $this->describeAppInstanceUser(),
            'describeAppInstanceUserEndpoint' => $this->describeAppInstanceUserEndpoint(),
            'getAppInstanceRetentionSettings' => $this->getAppInstanceRetentionSettings(),
            'listAppInstanceAdmins' => $this->listAppInstanceAdmins(),
            'listAppInstanceBots' => $this->listAppInstanceBots(),
            'listAppInstanceUserEndpoints' => $this->listAppInstanceUserEndpoints(),
            'listAppInstanceUsers' => $this->listAppInstanceUsers(),
            'listAppInstances' => $this->listAppInstances(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putAppInstanceRetentionSettings' => $this->putAppInstanceRetentionSettings(),
            'putAppInstanceUserExpirationSettings' => $this->putAppInstanceUserExpirationSettings(),
            'registerAppInstanceUserEndpoint' => $this->registerAppInstanceUserEndpoint(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAppInstance' => $this->updateAppInstance(),
            'updateAppInstanceBot' => $this->updateAppInstanceBot(),
            'updateAppInstanceUser' => $this->updateAppInstanceUser(),
            'updateAppInstanceUserEndpoint' => $this->updateAppInstanceUserEndpoint(),
        };
    }
    private function createAppInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAppInstanceAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceAdmin'),
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAppInstanceBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceBotArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAppInstanceUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAppInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAppInstanceAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAppInstanceBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAppInstanceUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deregisterAppInstanceUserEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeAppInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAppInstanceAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceAdmin'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Admin'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeAppInstanceBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceBot'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceBotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Lex'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RespondsTo'),
                            new \PHPStan\Type\Constant\ConstantStringType('InvokedBy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LexBotAliasArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocaleId'),
                            new \PHPStan\Type\Constant\ConstantStringType('WelcomeIntent'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD_MESSAGES'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StandardMessages'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetedMessages'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MENTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAppInstanceUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUser'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationSettings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationDays'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpirationCriterion'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED_TIMESTAMP'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAppInstanceUserEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointAttributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APNS'),
                        new \PHPStan\Type\Constant\ConstantStringType('APNS_SANDBOX'),
                        new \PHPStan\Type\Constant\ConstantStringType('GCM'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceToken'),
                        new \PHPStan\Type\Constant\ConstantStringType('VoipDeviceToken'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_DEVICE_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PINPOINT_ARN'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAppInstanceRetentionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceRetentionSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiateDeletionTimestamp'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelRetentionSettings'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listAppInstanceAdmins(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceAdmins'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Admin'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppInstanceBots(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceBots'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceBotArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppInstanceUserEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('APNS'),
                        new \PHPStan\Type\Constant\ConstantStringType('APNS_SANDBOX'),
                        new \PHPStan\Type\Constant\ConstantStringType('GCM'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_DEVICE_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_PINPOINT_ARN'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppInstanceUsers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUsers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAppInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
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
    private function putAppInstanceRetentionSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceRetentionSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('InitiateDeletionTimestamp'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChannelRetentionSettings'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RetentionDays'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function putAppInstanceUserExpirationSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpirationSettings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationDays'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationCriterion'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED_TIMESTAMP'),
                ]),
            ]),
        ]);
    }
    private function registerAppInstanceUserEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAppInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAppInstanceBot(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceBotArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAppInstanceUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAppInstanceUserEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppInstanceUserArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}