<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CognitoIdentityClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CognitoIdentity\CognitoIdentityClient>
     */
    public function getClass(): string
    {
        return \Aws\CognitoIdentity\CognitoIdentityClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createIdentityPool',
            'deleteIdentities',
            'deleteIdentityPool',
            'describeIdentity',
            'describeIdentityPool',
            'getCredentialsForIdentity',
            'getId',
            'getIdentityPoolRoles',
            'getOpenIdToken',
            'getOpenIdTokenForDeveloperIdentity',
            'getPrincipalTagAttributeMap',
            'listIdentities',
            'listIdentityPools',
            'listTagsForResource',
            'lookupDeveloperIdentity',
            'mergeDeveloperIdentities',
            'setIdentityPoolRoles',
            'setPrincipalTagAttributeMap',
            'tagResource',
            'unlinkDeveloperIdentity',
            'unlinkIdentity',
            'untagResource',
            'updateIdentityPool',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createIdentityPool' => $this->createIdentityPool(),
            'deleteIdentities' => $this->deleteIdentities(),
            'deleteIdentityPool' => $this->deleteIdentityPool(),
            'describeIdentity' => $this->describeIdentity(),
            'describeIdentityPool' => $this->describeIdentityPool(),
            'getCredentialsForIdentity' => $this->getCredentialsForIdentity(),
            'getId' => $this->getId(),
            'getIdentityPoolRoles' => $this->getIdentityPoolRoles(),
            'getOpenIdToken' => $this->getOpenIdToken(),
            'getOpenIdTokenForDeveloperIdentity' => $this->getOpenIdTokenForDeveloperIdentity(),
            'getPrincipalTagAttributeMap' => $this->getPrincipalTagAttributeMap(),
            'listIdentities' => $this->listIdentities(),
            'listIdentityPools' => $this->listIdentityPools(),
            'listTagsForResource' => $this->listTagsForResource(),
            'lookupDeveloperIdentity' => $this->lookupDeveloperIdentity(),
            'mergeDeveloperIdentities' => $this->mergeDeveloperIdentities(),
            'setIdentityPoolRoles' => $this->setIdentityPoolRoles(),
            'setPrincipalTagAttributeMap' => $this->setPrincipalTagAttributeMap(),
            'tagResource' => $this->tagResource(),
            'unlinkDeveloperIdentity' => $this->unlinkDeveloperIdentity(),
            'unlinkIdentity' => $this->unlinkIdentity(),
            'untagResource' => $this->untagResource(),
            'updateIdentityPool' => $this->updateIdentityPool(),
        };
    }
    private function createIdentityPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolName'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowUnauthenticatedIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowClassicFlow'),
                new \PHPStan\Type\Constant\ConstantStringType('SupportedLoginProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('DeveloperProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenIdConnectProviderARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('CognitoIdentityProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('SamlProviderARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerSideTokenCheck'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedIdentityIds'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function deleteIdentityPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                new \PHPStan\Type\Constant\ConstantStringType('Logins'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeIdentityPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolName'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowUnauthenticatedIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowClassicFlow'),
                new \PHPStan\Type\Constant\ConstantStringType('SupportedLoginProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('DeveloperProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenIdConnectProviderARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('CognitoIdentityProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('SamlProviderARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerSideTokenCheck'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getCredentialsForIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                new \PHPStan\Type\Constant\ConstantStringType('Credentials'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('SessionToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIdentityPoolRoles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('Roles'),
                new \PHPStan\Type\Constant\ConstantStringType('RoleMappings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmbiguousRoleResolution'),
                    new \PHPStan\Type\Constant\ConstantStringType('RulesConfiguration'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Token'),
                        new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticatedRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deny'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Claim'),
                                new \PHPStan\Type\Constant\ConstantStringType('MatchType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Equals'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Contains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StartsWith'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NotEqual'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getOpenIdToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                new \PHPStan\Type\Constant\ConstantStringType('Token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getOpenIdTokenForDeveloperIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                new \PHPStan\Type\Constant\ConstantStringType('Token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPrincipalTagAttributeMap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('UseDefaults'),
                new \PHPStan\Type\Constant\ConstantStringType('PrincipalTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('Identities'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logins'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityPools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPools'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function lookupDeveloperIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeveloperUserIdentifierList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function mergeDeveloperIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setIdentityPoolRoles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setPrincipalTagAttributeMap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('UseDefaults'),
                new \PHPStan\Type\Constant\ConstantStringType('PrincipalTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function unlinkDeveloperIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function unlinkIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateIdentityPool(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolName'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowUnauthenticatedIdentities'),
                new \PHPStan\Type\Constant\ConstantStringType('AllowClassicFlow'),
                new \PHPStan\Type\Constant\ConstantStringType('SupportedLoginProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('DeveloperProviderName'),
                new \PHPStan\Type\Constant\ConstantStringType('OpenIdConnectProviderARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('CognitoIdentityProviders'),
                new \PHPStan\Type\Constant\ConstantStringType('SamlProviderARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolTags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerSideTokenCheck'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}