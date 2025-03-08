<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AmplifyBackendClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AmplifyBackend\AmplifyBackendClient>
     */
    public function getClass(): string
    {
        return \Aws\AmplifyBackend\AmplifyBackendClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cloneBackend',
            'createBackend',
            'createBackendAPI',
            'createBackendAuth',
            'createBackendConfig',
            'createBackendStorage',
            'createToken',
            'deleteBackend',
            'deleteBackendAPI',
            'deleteBackendAuth',
            'deleteBackendStorage',
            'deleteToken',
            'generateBackendAPIModels',
            'getBackend',
            'getBackendAPI',
            'getBackendAPIModels',
            'getBackendAuth',
            'getBackendJob',
            'getBackendStorage',
            'getToken',
            'importBackendAuth',
            'importBackendStorage',
            'listBackendJobs',
            'listS3Buckets',
            'removeAllBackends',
            'removeBackendConfig',
            'updateBackendAPI',
            'updateBackendAuth',
            'updateBackendConfig',
            'updateBackendJob',
            'updateBackendStorage',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cloneBackend' => $this->cloneBackend(),
            'createBackend' => $this->createBackend(),
            'createBackendAPI' => $this->createBackendAPI(),
            'createBackendAuth' => $this->createBackendAuth(),
            'createBackendConfig' => $this->createBackendConfig(),
            'createBackendStorage' => $this->createBackendStorage(),
            'createToken' => $this->createToken(),
            'deleteBackend' => $this->deleteBackend(),
            'deleteBackendAPI' => $this->deleteBackendAPI(),
            'deleteBackendAuth' => $this->deleteBackendAuth(),
            'deleteBackendStorage' => $this->deleteBackendStorage(),
            'deleteToken' => $this->deleteToken(),
            'generateBackendAPIModels' => $this->generateBackendAPIModels(),
            'getBackend' => $this->getBackend(),
            'getBackendAPI' => $this->getBackendAPI(),
            'getBackendAPIModels' => $this->getBackendAPIModels(),
            'getBackendAuth' => $this->getBackendAuth(),
            'getBackendJob' => $this->getBackendJob(),
            'getBackendStorage' => $this->getBackendStorage(),
            'getToken' => $this->getToken(),
            'importBackendAuth' => $this->importBackendAuth(),
            'importBackendStorage' => $this->importBackendStorage(),
            'listBackendJobs' => $this->listBackendJobs(),
            'listS3Buckets' => $this->listS3Buckets(),
            'removeAllBackends' => $this->removeAllBackends(),
            'removeBackendConfig' => $this->removeBackendConfig(),
            'updateBackendAPI' => $this->updateBackendAPI(),
            'updateBackendAuth' => $this->updateBackendAuth(),
            'updateBackendConfig' => $this->updateBackendConfig(),
            'updateBackendJob' => $this->updateBackendJob(),
            'updateBackendStorage' => $this->updateBackendStorage(),
        };
    }
    private function cloneBackend(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBackend(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBackendAPI(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBackendAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBackendConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createBackendStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeCode'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBackend(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBackendAPI(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBackendAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteBackendStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IsSuccess'),
            ], [
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function generateBackendAPIModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackend(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AmplifyFeatureFlags'),
                new \PHPStan\Type\Constant\ConstantStringType('AmplifyMetaConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('AppName'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentList'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackendAPI(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalAuthTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConflictResolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultAuthType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Service'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransformSchema'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CognitoUserPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDAuthTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDIatTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDIssueURL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDProviderName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResolutionStrategy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CognitoUserPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDAuthTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDIatTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDIssueURL'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenIDProviderName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackendAPIModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Models'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelIntrospectionSchema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('STALE'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackendAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AuthResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolConfigs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Service'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserPoolConfigs'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER_POOL_ONLY'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDENTITY_POOL_AND_USER_POOL'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolName'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnauthenticatedLogin'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('COGNITO'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ForgotPassword'),
                        new \PHPStan\Type\Constant\ConstantStringType('Mfa'),
                        new \PHPStan\Type\Constant\ConstantStringType('OAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('PasswordPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequiredSignUpAttributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignInMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserPoolName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VerificationMessage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmsSettings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('EmailSubject'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SmsMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MFAMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ON'),
                                new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONAL'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MfaTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmsMessage'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TOTP'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('OAuthGrantType'),
                            new \PHPStan\Type\Constant\ConstantStringType('OAuthScopes'),
                            new \PHPStan\Type\Constant\ConstantStringType('RedirectSignInURIs'),
                            new \PHPStan\Type\Constant\ConstantStringType('RedirectSignOutURIs'),
                            new \PHPStan\Type\Constant\ConstantStringType('SocialProviderSettings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CODE'),
                                new \PHPStan\Type\Constant\ConstantStringType('IMPLICIT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PHONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID'),
                                new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_COGNITO_SIGNIN_USER_ADMIN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Facebook'),
                                new \PHPStan\Type\Constant\ConstantStringType('Google'),
                                new \PHPStan\Type\Constant\ConstantStringType('LoginWithAmazon'),
                                new \PHPStan\Type\Constant\ConstantStringType('SignInWithApple'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateKey'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TeamId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdditionalConstraints'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumLength'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRE_DIGIT'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRE_LOWERCASE'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRE_SYMBOL'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUIRE_UPPERCASE'),
                            ]),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADDRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BIRTHDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAMILY_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('GENDER'),
                            new \PHPStan\Type\Constant\ConstantStringType('GIVEN_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOCALE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MIDDLE_NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('NICKNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PICTURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFERRED_USERNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROFILE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATED_AT'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEBSITE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZONE_INFO'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EMAIL_AND_PHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('PHONE_NUMBER'),
                            new \PHPStan\Type\Constant\ConstantStringType('USERNAME'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DeliveryMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('EmailSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmsSettings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EMAIL'),
                                new \PHPStan\Type\Constant\ConstantStringType('SMS'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('EmailMessage'),
                                new \PHPStan\Type\Constant\ConstantStringType('EmailSubject'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SmsMessage'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackendJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackendStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Imported'),
                    new \PHPStan\Type\Constant\ConstantStringType('Permissions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Authenticated'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnAuthenticated'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_AND_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('READ'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_AND_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('S3'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChallengeCode'),
                new \PHPStan\Type\Constant\ConstantStringType('SessionId'),
                new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importBackendAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importBackendStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBackendJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Jobs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                    new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
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
    private function listS3Buckets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Buckets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeAllBackends(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeBackendConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBackendAPI(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBackendAuth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBackendConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendManagerAppId'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('LoginAuthConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AwsCognitoIdentityPoolId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsCognitoRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsUserPoolsId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AwsUserPoolsWebClientId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateBackendJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateBackendStorage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppId'),
                new \PHPStan\Type\Constant\ConstantStringType('BackendEnvironmentName'),
                new \PHPStan\Type\Constant\ConstantStringType('JobId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}