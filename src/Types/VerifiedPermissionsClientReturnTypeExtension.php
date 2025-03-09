<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class VerifiedPermissionsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\VerifiedPermissions\VerifiedPermissionsClient>
     */
    public function getClass(): string
    {
        return \Aws\VerifiedPermissions\VerifiedPermissionsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchGetPolicy',
            'batchIsAuthorized',
            'batchIsAuthorizedWithToken',
            'createIdentitySource',
            'createPolicy',
            'createPolicyStore',
            'createPolicyTemplate',
            'deleteIdentitySource',
            'deletePolicy',
            'deletePolicyStore',
            'deletePolicyTemplate',
            'getIdentitySource',
            'getPolicy',
            'getPolicyStore',
            'getPolicyTemplate',
            'getSchema',
            'isAuthorized',
            'isAuthorizedWithToken',
            'listIdentitySources',
            'listPolicies',
            'listPolicyStores',
            'listPolicyTemplates',
            'putSchema',
            'updateIdentitySource',
            'updatePolicy',
            'updatePolicyStore',
            'updatePolicyTemplate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchGetPolicy' => $this->batchGetPolicy(),
            'batchIsAuthorized' => $this->batchIsAuthorized(),
            'batchIsAuthorizedWithToken' => $this->batchIsAuthorizedWithToken(),
            'createIdentitySource' => $this->createIdentitySource(),
            'createPolicy' => $this->createPolicy(),
            'createPolicyStore' => $this->createPolicyStore(),
            'createPolicyTemplate' => $this->createPolicyTemplate(),
            'deleteIdentitySource' => $this->deleteIdentitySource(),
            'deletePolicy' => $this->deletePolicy(),
            'deletePolicyStore' => $this->deletePolicyStore(),
            'deletePolicyTemplate' => $this->deletePolicyTemplate(),
            'getIdentitySource' => $this->getIdentitySource(),
            'getPolicy' => $this->getPolicy(),
            'getPolicyStore' => $this->getPolicyStore(),
            'getPolicyTemplate' => $this->getPolicyTemplate(),
            'getSchema' => $this->getSchema(),
            'isAuthorized' => $this->isAuthorized(),
            'isAuthorizedWithToken' => $this->isAuthorizedWithToken(),
            'listIdentitySources' => $this->listIdentitySources(),
            'listPolicies' => $this->listPolicies(),
            'listPolicyStores' => $this->listPolicyStores(),
            'listPolicyTemplates' => $this->listPolicyTemplates(),
            'putSchema' => $this->putSchema(),
            'updateIdentitySource' => $this->updateIdentitySource(),
            'updatePolicy' => $this->updatePolicy(),
            'updatePolicyStore' => $this->updatePolicyStore(),
            'updatePolicyTemplate' => $this->updatePolicyTemplate(),
        };
    }
    private function batchGetPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('results'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE_LINKED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('static'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateLinked'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('statement'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('principal'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('POLICY_STORE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('POLICY_NOT_FOUND'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchIsAuthorized(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('request'),
                    new \PHPStan\Type\Constant\ConstantStringType('decision'),
                    new \PHPStan\Type\Constant\ConstantStringType('determiningPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('context'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contextMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('cedarJson'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('long'),
                                new \PHPStan\Type\Constant\ConstantStringType('string'),
                                new \PHPStan\Type\Constant\ConstantStringType('set'),
                                new \PHPStan\Type\Constant\ConstantStringType('record'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipaddr'),
                                new \PHPStan\Type\Constant\ConstantStringType('decimal'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function batchIsAuthorizedWithToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('principal'),
                new \PHPStan\Type\Constant\ConstantStringType('results'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('request'),
                    new \PHPStan\Type\Constant\ConstantStringType('decision'),
                    new \PHPStan\Type\Constant\ConstantStringType('determiningPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        new \PHPStan\Type\Constant\ConstantStringType('context'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('contextMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('cedarJson'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('boolean'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('long'),
                                new \PHPStan\Type\Constant\ConstantStringType('string'),
                                new \PHPStan\Type\Constant\ConstantStringType('set'),
                                new \PHPStan\Type\Constant\ConstantStringType('record'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipaddr'),
                                new \PHPStan\Type\Constant\ConstantStringType('decimal'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\MixedType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorDescription'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function createIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                new \PHPStan\Type\Constant\ConstantStringType('principal'),
                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                new \PHPStan\Type\Constant\ConstantStringType('actions'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('effect'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE_LINKED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Permit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Forbid'),
                ]),
            ]),
        ]);
    }
    private function createPolicyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createPolicyTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePolicyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePolicyTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('details'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('principalEntityType'),
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clientIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('userPoolArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('discoveryUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIdIssuer'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('COGNITO'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cognitoUserPoolConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIdConnectConfiguration'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupEntityType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityIdPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('tokenSelection'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupClaim'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupEntityType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessTokenOnly'),
                            new \PHPStan\Type\Constant\ConstantStringType('identityTokenOnly'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('principalIdClaim'),
                                new \PHPStan\Type\Constant\ConstantStringType('audiences'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('principalIdClaim'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientIds'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                new \PHPStan\Type\Constant\ConstantStringType('principal'),
                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                new \PHPStan\Type\Constant\ConstantStringType('actions'),
                new \PHPStan\Type\Constant\ConstantStringType('definition'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('effect'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE_LINKED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('static'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateLinked'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('statement'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('principal'),
                        new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Permit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Forbid'),
                ]),
            ]),
        ]);
    }
    private function getPolicyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('validationSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPolicyTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('statement'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function isAuthorized(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('decision'),
                new \PHPStan\Type\Constant\ConstantStringType('determiningPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function isAuthorizedWithToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('decision'),
                new \PHPStan\Type\Constant\ConstantStringType('determiningPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
                new \PHPStan\Type\Constant\ConstantStringType('principal'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('errorDescription'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listIdentitySources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('details'),
                    new \PHPStan\Type\Constant\ConstantStringType('identitySourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalEntityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clientIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('discoveryUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('openIdIssuer'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('COGNITO'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cognitoUserPoolConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('openIdConnectConfiguration'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupConfiguration'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('groupEntityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('entityIdPrefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('groupConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('tokenSelection'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('groupClaim'),
                                new \PHPStan\Type\Constant\ConstantStringType('groupEntityType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('accessTokenOnly'),
                                new \PHPStan\Type\Constant\ConstantStringType('identityTokenOnly'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('principalIdClaim'),
                                    new \PHPStan\Type\Constant\ConstantStringType('audiences'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('principalIdClaim'),
                                    new \PHPStan\Type\Constant\ConstantStringType('clientIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('policies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('principal'),
                    new \PHPStan\Type\Constant\ConstantStringType('resource'),
                    new \PHPStan\Type\Constant\ConstantStringType('actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('effect'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE_LINKED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                        new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('static'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateLinked'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('principal'),
                            new \PHPStan\Type\Constant\ConstantStringType('resource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                                new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Permit'),
                        new \PHPStan\Type\Constant\ConstantStringType('Forbid'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listPolicyStores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('policyStores'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listPolicyTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('policyTemplates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function putSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateIdentitySource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyType'),
                new \PHPStan\Type\Constant\ConstantStringType('principal'),
                new \PHPStan\Type\Constant\ConstantStringType('resource'),
                new \PHPStan\Type\Constant\ConstantStringType('actions'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('effect'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEMPLATE_LINKED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('entityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('entityId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('actionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('actionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Permit'),
                    new \PHPStan\Type\Constant\ConstantStringType('Forbid'),
                ]),
            ]),
        ]);
    }
    private function updatePolicyStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updatePolicyTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policyStoreId'),
                new \PHPStan\Type\Constant\ConstantStringType('policyTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
}