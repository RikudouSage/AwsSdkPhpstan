<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class VPCLatticeClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\VPCLattice\VPCLatticeClient>
     */
    public function getClass(): string
    {
        return \Aws\VPCLattice\VPCLatticeClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'batchUpdateRule',
            'createAccessLogSubscription',
            'createListener',
            'createResourceConfiguration',
            'createResourceGateway',
            'createRule',
            'createService',
            'createServiceNetwork',
            'createServiceNetworkResourceAssociation',
            'createServiceNetworkServiceAssociation',
            'createServiceNetworkVpcAssociation',
            'createTargetGroup',
            'deleteAccessLogSubscription',
            'deleteAuthPolicy',
            'deleteListener',
            'deleteResourceConfiguration',
            'deleteResourceEndpointAssociation',
            'deleteResourceGateway',
            'deleteResourcePolicy',
            'deleteRule',
            'deleteService',
            'deleteServiceNetwork',
            'deleteServiceNetworkResourceAssociation',
            'deleteServiceNetworkServiceAssociation',
            'deleteServiceNetworkVpcAssociation',
            'deleteTargetGroup',
            'deregisterTargets',
            'getAccessLogSubscription',
            'getAuthPolicy',
            'getListener',
            'getResourceConfiguration',
            'getResourceGateway',
            'getResourcePolicy',
            'getRule',
            'getService',
            'getServiceNetwork',
            'getServiceNetworkResourceAssociation',
            'getServiceNetworkServiceAssociation',
            'getServiceNetworkVpcAssociation',
            'getTargetGroup',
            'listAccessLogSubscriptions',
            'listListeners',
            'listResourceConfigurations',
            'listResourceEndpointAssociations',
            'listResourceGateways',
            'listRules',
            'listServiceNetworkResourceAssociations',
            'listServiceNetworkServiceAssociations',
            'listServiceNetworkVpcAssociations',
            'listServiceNetworkVpcEndpointAssociations',
            'listServiceNetworks',
            'listServices',
            'listTagsForResource',
            'listTargetGroups',
            'listTargets',
            'putAuthPolicy',
            'putResourcePolicy',
            'registerTargets',
            'tagResource',
            'untagResource',
            'updateAccessLogSubscription',
            'updateListener',
            'updateResourceConfiguration',
            'updateResourceGateway',
            'updateRule',
            'updateService',
            'updateServiceNetwork',
            'updateServiceNetworkVpcAssociation',
            'updateTargetGroup',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'batchUpdateRule' => $this->batchUpdateRule(),
            'createAccessLogSubscription' => $this->createAccessLogSubscription(),
            'createListener' => $this->createListener(),
            'createResourceConfiguration' => $this->createResourceConfiguration(),
            'createResourceGateway' => $this->createResourceGateway(),
            'createRule' => $this->createRule(),
            'createService' => $this->createService(),
            'createServiceNetwork' => $this->createServiceNetwork(),
            'createServiceNetworkResourceAssociation' => $this->createServiceNetworkResourceAssociation(),
            'createServiceNetworkServiceAssociation' => $this->createServiceNetworkServiceAssociation(),
            'createServiceNetworkVpcAssociation' => $this->createServiceNetworkVpcAssociation(),
            'createTargetGroup' => $this->createTargetGroup(),
            'deleteAccessLogSubscription' => $this->deleteAccessLogSubscription(),
            'deleteAuthPolicy' => $this->deleteAuthPolicy(),
            'deleteListener' => $this->deleteListener(),
            'deleteResourceConfiguration' => $this->deleteResourceConfiguration(),
            'deleteResourceEndpointAssociation' => $this->deleteResourceEndpointAssociation(),
            'deleteResourceGateway' => $this->deleteResourceGateway(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteRule' => $this->deleteRule(),
            'deleteService' => $this->deleteService(),
            'deleteServiceNetwork' => $this->deleteServiceNetwork(),
            'deleteServiceNetworkResourceAssociation' => $this->deleteServiceNetworkResourceAssociation(),
            'deleteServiceNetworkServiceAssociation' => $this->deleteServiceNetworkServiceAssociation(),
            'deleteServiceNetworkVpcAssociation' => $this->deleteServiceNetworkVpcAssociation(),
            'deleteTargetGroup' => $this->deleteTargetGroup(),
            'deregisterTargets' => $this->deregisterTargets(),
            'getAccessLogSubscription' => $this->getAccessLogSubscription(),
            'getAuthPolicy' => $this->getAuthPolicy(),
            'getListener' => $this->getListener(),
            'getResourceConfiguration' => $this->getResourceConfiguration(),
            'getResourceGateway' => $this->getResourceGateway(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getRule' => $this->getRule(),
            'getService' => $this->getService(),
            'getServiceNetwork' => $this->getServiceNetwork(),
            'getServiceNetworkResourceAssociation' => $this->getServiceNetworkResourceAssociation(),
            'getServiceNetworkServiceAssociation' => $this->getServiceNetworkServiceAssociation(),
            'getServiceNetworkVpcAssociation' => $this->getServiceNetworkVpcAssociation(),
            'getTargetGroup' => $this->getTargetGroup(),
            'listAccessLogSubscriptions' => $this->listAccessLogSubscriptions(),
            'listListeners' => $this->listListeners(),
            'listResourceConfigurations' => $this->listResourceConfigurations(),
            'listResourceEndpointAssociations' => $this->listResourceEndpointAssociations(),
            'listResourceGateways' => $this->listResourceGateways(),
            'listRules' => $this->listRules(),
            'listServiceNetworkResourceAssociations' => $this->listServiceNetworkResourceAssociations(),
            'listServiceNetworkServiceAssociations' => $this->listServiceNetworkServiceAssociations(),
            'listServiceNetworkVpcAssociations' => $this->listServiceNetworkVpcAssociations(),
            'listServiceNetworkVpcEndpointAssociations' => $this->listServiceNetworkVpcEndpointAssociations(),
            'listServiceNetworks' => $this->listServiceNetworks(),
            'listServices' => $this->listServices(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTargetGroups' => $this->listTargetGroups(),
            'listTargets' => $this->listTargets(),
            'putAuthPolicy' => $this->putAuthPolicy(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'registerTargets' => $this->registerTargets(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccessLogSubscription' => $this->updateAccessLogSubscription(),
            'updateListener' => $this->updateListener(),
            'updateResourceConfiguration' => $this->updateResourceConfiguration(),
            'updateResourceGateway' => $this->updateResourceGateway(),
            'updateRule' => $this->updateRule(),
            'updateService' => $this->updateService(),
            'updateServiceNetwork' => $this->updateServiceNetwork(),
            'updateServiceNetworkVpcAssociation' => $this->updateServiceNetworkVpcAssociation(),
            'updateTargetGroup' => $this->updateTargetGroup(),
        };
    }
    private function batchUpdateRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successful'),
                new \PHPStan\Type\Constant\ConstantStringType('unsuccessful'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('isDefault'),
                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('httpMatch'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headerMatches'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('pathMatch'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('contains'),
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ruleIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createAccessLogSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkLogType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                ]),
            ]),
        ]);
    }
    private function createListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('forward'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PASSTHROUGH'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createResourceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('allowAssociationToShareableServiceNetwork'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('portRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arnResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('dnsResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipResource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ]),
            ]),
        ]);
    }
    private function createResourceGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcIdentifier'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('match'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('priority'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('forward'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('httpMatch'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('headerMatches'),
                        new \PHPStan\Type\Constant\ConstantStringType('method'),
                        new \PHPStan\Type\Constant\ConstantStringType('pathMatch'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createServiceNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('sharingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createServiceNetworkResourceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createServiceNetworkServiceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createServiceNetworkVpcAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function createTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('config'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaEventStructureVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcIdentifier'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheckIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheckTimeoutSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthyThresholdCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('matcher'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('unhealthyThresholdCount'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('httpCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP1'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP2'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP1'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRPC'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALB'),
                ]),
            ]),
        ]);
    }
    private function deleteAccessLogSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAuthPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteResourceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteResourceEndpointAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteResourceGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteServiceNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServiceNetworkResourceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteServiceNetworkServiceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteServiceNetworkVpcAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deleteTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function deregisterTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successful'),
                new \PHPStan\Type\Constant\ConstantStringType('unsuccessful'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getAccessLogSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkLogType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                ]),
            ]),
        ]);
    }
    private function getAuthPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                ]),
            ]),
        ]);
    }
    private function getListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('forward'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PASSTHROUGH'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('allowAssociationToShareableServiceNetwork'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('portRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arnResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('dnsResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipResource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ]),
            ]),
        ]);
    }
    private function getResourceGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('isDefault'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('match'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('priority'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('forward'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('httpMatch'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('headerMatches'),
                        new \PHPStan\Type\Constant\ConstantStringType('method'),
                        new \PHPStan\Type\Constant\ConstantStringType('pathMatch'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function getServiceNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfAssociatedServices'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfAssociatedVPCs'),
                new \PHPStan\Type\Constant\ConstantStringType('sharingConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getServiceNetworkResourceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('isManagedAssociation'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('privateDnsEntry'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationName'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkName'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function getServiceNetworkServiceAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkName'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
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
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function getServiceNetworkVpcAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkName'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('config'),
                new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceArns'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaEventStructureVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcIdentifier'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheckIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheckTimeoutSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthyThresholdCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('matcher'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('unhealthyThresholdCount'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('httpCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP1'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP2'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP1'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRPC'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALB'),
                ]),
            ]),
        ]);
    }
    private function listAccessLogSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkLogType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listListeners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLS_PASSTHROUGH'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amazonManaged'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceGatewayId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                            new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceEndpointAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointOwner'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('isDefault'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceNetworkResourceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('isManagedAssociation'),
                        new \PHPStan\Type\Constant\ConstantStringType('privateDnsEntry'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationName'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceNetworkServiceAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceNetworkVpcAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceNetworkVpcEndpointAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointOwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceNetworks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfAssociatedResourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfAssociatedServices'),
                        new \PHPStan\Type\Constant\ConstantStringType('numberOfAssociatedVPCs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsEntry'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
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
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listTargetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaEventStructureVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcIdentifier'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('V1'),
                            new \PHPStan\Type\Constant\ConstantStringType('V2'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALB'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('items'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('reasonCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRAINING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('INITIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNUSED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putAuthPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('state'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Inactive'),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('successful'),
                new \PHPStan\Type\Constant\ConstantStringType('unsuccessful'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('failureCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('failureMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
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
    private function updateAccessLogSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('port'),
                new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('forward'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_PASSTHROUGH'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateResourceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('allowAssociationToShareableServiceNetwork'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('portRanges'),
                new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationDefinition'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceConfigurationGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arnResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('dnsResource'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipResource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                            new \PHPStan\Type\Constant\ConstantStringType('DUALSTACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('GROUP'),
                    new \PHPStan\Type\Constant\ConstantStringType('CHILD'),
                    new \PHPStan\Type\Constant\ConstantStringType('SINGLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                ]),
            ]),
        ]);
    }
    private function updateResourceGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                    new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('isDefault'),
                new \PHPStan\Type\Constant\ConstantStringType('match'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('priority'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fixedResponse'),
                    new \PHPStan\Type\Constant\ConstantStringType('forward'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetGroups'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetGroupIdentifier'),
                                new \PHPStan\Type\Constant\ConstantStringType('weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('httpMatch'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('headerMatches'),
                        new \PHPStan\Type\Constant\ConstantStringType('method'),
                        new \PHPStan\Type\Constant\ConstantStringType('pathMatch'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                                new \PHPStan\Type\Constant\ConstantStringType('match'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('contains'),
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('caseSensitive'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('customDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateServiceNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateServiceNetworkVpcAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('createdBy'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('config'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaEventStructureVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcIdentifier'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheckIntervalSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthCheckTimeoutSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('healthyThresholdCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('matcher'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('protocolVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('unhealthyThresholdCount'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('httpCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP1'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP2'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPV4'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPV6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('V1'),
                        new \PHPStan\Type\Constant\ConstantStringType('V2'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP1'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP2'),
                        new \PHPStan\Type\Constant\ConstantStringType('GRPC'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IP'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ALB'),
                ]),
            ]),
        ]);
    }
}