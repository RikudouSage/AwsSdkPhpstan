<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ElasticLoadBalancingV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client>
     */
    public function getClass(): string
    {
        return \Aws\ElasticLoadBalancingV2\ElasticLoadBalancingV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addListenerCertificates',
            'addTags',
            'addTrustStoreRevocations',
            'createListener',
            'createLoadBalancer',
            'createRule',
            'createTargetGroup',
            'createTrustStore',
            'deleteListener',
            'deleteLoadBalancer',
            'deleteRule',
            'deleteSharedTrustStoreAssociation',
            'deleteTargetGroup',
            'deleteTrustStore',
            'deregisterTargets',
            'describeAccountLimits',
            'describeCapacityReservation',
            'describeListenerAttributes',
            'describeListenerCertificates',
            'describeListeners',
            'describeLoadBalancerAttributes',
            'describeLoadBalancers',
            'describeRules',
            'describeSSLPolicies',
            'describeTags',
            'describeTargetGroupAttributes',
            'describeTargetGroups',
            'describeTargetHealth',
            'describeTrustStoreAssociations',
            'describeTrustStoreRevocations',
            'describeTrustStores',
            'getResourcePolicy',
            'getTrustStoreCaCertificatesBundle',
            'getTrustStoreRevocationContent',
            'modifyCapacityReservation',
            'modifyIpPools',
            'modifyListener',
            'modifyListenerAttributes',
            'modifyLoadBalancerAttributes',
            'modifyRule',
            'modifyTargetGroup',
            'modifyTargetGroupAttributes',
            'modifyTrustStore',
            'registerTargets',
            'removeListenerCertificates',
            'removeTags',
            'removeTrustStoreRevocations',
            'setIpAddressType',
            'setRulePriorities',
            'setSecurityGroups',
            'setSubnets',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addListenerCertificates' => $this->addListenerCertificates(),
            'addTags' => $this->addTags(),
            'addTrustStoreRevocations' => $this->addTrustStoreRevocations(),
            'createListener' => $this->createListener(),
            'createLoadBalancer' => $this->createLoadBalancer(),
            'createRule' => $this->createRule(),
            'createTargetGroup' => $this->createTargetGroup(),
            'createTrustStore' => $this->createTrustStore(),
            'deleteListener' => $this->deleteListener(),
            'deleteLoadBalancer' => $this->deleteLoadBalancer(),
            'deleteRule' => $this->deleteRule(),
            'deleteSharedTrustStoreAssociation' => $this->deleteSharedTrustStoreAssociation(),
            'deleteTargetGroup' => $this->deleteTargetGroup(),
            'deleteTrustStore' => $this->deleteTrustStore(),
            'deregisterTargets' => $this->deregisterTargets(),
            'describeAccountLimits' => $this->describeAccountLimits(),
            'describeCapacityReservation' => $this->describeCapacityReservation(),
            'describeListenerAttributes' => $this->describeListenerAttributes(),
            'describeListenerCertificates' => $this->describeListenerCertificates(),
            'describeListeners' => $this->describeListeners(),
            'describeLoadBalancerAttributes' => $this->describeLoadBalancerAttributes(),
            'describeLoadBalancers' => $this->describeLoadBalancers(),
            'describeRules' => $this->describeRules(),
            'describeSSLPolicies' => $this->describeSSLPolicies(),
            'describeTags' => $this->describeTags(),
            'describeTargetGroupAttributes' => $this->describeTargetGroupAttributes(),
            'describeTargetGroups' => $this->describeTargetGroups(),
            'describeTargetHealth' => $this->describeTargetHealth(),
            'describeTrustStoreAssociations' => $this->describeTrustStoreAssociations(),
            'describeTrustStoreRevocations' => $this->describeTrustStoreRevocations(),
            'describeTrustStores' => $this->describeTrustStores(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getTrustStoreCaCertificatesBundle' => $this->getTrustStoreCaCertificatesBundle(),
            'getTrustStoreRevocationContent' => $this->getTrustStoreRevocationContent(),
            'modifyCapacityReservation' => $this->modifyCapacityReservation(),
            'modifyIpPools' => $this->modifyIpPools(),
            'modifyListener' => $this->modifyListener(),
            'modifyListenerAttributes' => $this->modifyListenerAttributes(),
            'modifyLoadBalancerAttributes' => $this->modifyLoadBalancerAttributes(),
            'modifyRule' => $this->modifyRule(),
            'modifyTargetGroup' => $this->modifyTargetGroup(),
            'modifyTargetGroupAttributes' => $this->modifyTargetGroupAttributes(),
            'modifyTrustStore' => $this->modifyTrustStore(),
            'registerTargets' => $this->registerTargets(),
            'removeListenerCertificates' => $this->removeListenerCertificates(),
            'removeTags' => $this->removeTags(),
            'removeTrustStoreRevocations' => $this->removeTrustStoreRevocations(),
            'setIpAddressType' => $this->setIpAddressType(),
            'setRulePriorities' => $this->setRulePriorities(),
            'setSecurityGroups' => $this->setSecurityGroups(),
            'setSubnets' => $this->setSubnets(),
        };
    }
    private function addListenerCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function addTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function addTrustStoreRevocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustStoreRevocations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevocationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfRevokedEntries'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CRL'),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function createListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('SslPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlpnPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('MutualAuthentication'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IgnoreClientCertificateExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustStoreAssociationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvertiseTrustStoreCaNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('removed'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('on'),
                            new \PHPStan\Type\Constant\ConstantStringType('off'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createLoadBalancer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancers'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scheme'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerOwnedIpv4Pool'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnablePrefixForIpv6SourceNat'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpamPools'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('internet-facing'),
                        new \PHPStan\Type\Constant\ConstantStringType('internal'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                            new \PHPStan\Type\Constant\ConstantStringType('active_impaired'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('network'),
                        new \PHPStan\Type\Constant\ConstantStringType('gateway'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceNatIpv6Prefixes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllocationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPv4Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('dualstack'),
                        new \PHPStan\Type\Constant\ConstantStringType('dualstack-without-public-ipv4'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('on'),
                        new \PHPStan\Type\Constant\ConstantStringType('off'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4IpamPoolId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('PathPatternConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpRequestMethodConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIpConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function createTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckTimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthyThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Matcher'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HttpCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrpcCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('ip'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('alb'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function createTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustStores'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfCaCertificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalRevokedEntries'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function deleteListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLoadBalancer(): ?\PHPStan\Type\Type
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
    private function deleteSharedTrustStoreAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccountLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Limits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Max'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DecreaseRequestsRemaining'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumLoadBalancerCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationState'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveCapacityUnits'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('provisioned'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('rebalancing'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ])),
            ]),
        ]);
    }
    private function describeListenerAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
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
    private function describeListenerCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeListeners(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('SslPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlpnPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('MutualAuthentication'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IgnoreClientCertificateExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustStoreAssociationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvertiseTrustStoreCaNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('removed'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('on'),
                            new \PHPStan\Type\Constant\ConstantStringType('off'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeLoadBalancerAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
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
    private function describeLoadBalancers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LoadBalancers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CanonicalHostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scheme'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerOwnedIpv4Pool'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnablePrefixForIpv6SourceNat'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpamPools'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('internet-facing'),
                        new \PHPStan\Type\Constant\ConstantStringType('internal'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                            new \PHPStan\Type\Constant\ConstantStringType('active_impaired'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('application'),
                        new \PHPStan\Type\Constant\ConstantStringType('network'),
                        new \PHPStan\Type\Constant\ConstantStringType('gateway'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAddresses'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceNatIpv6Prefixes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllocationId'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateIPv4Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('IPv6Address'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('dualstack'),
                        new \PHPStan\Type\Constant\ConstantStringType('dualstack-without-public-ipv4'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('on'),
                        new \PHPStan\Type\Constant\ConstantStringType('off'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4IpamPoolId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeRules(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('PathPatternConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpRequestMethodConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIpConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeSSLPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SslPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SslProtocols'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ciphers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedLoadBalancerTypes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagDescriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeTargetGroupAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
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
    private function describeTargetGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckTimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthyThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Matcher'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HttpCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrpcCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('ip'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('alb'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTargetHealth(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetHealthDescriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetHealth'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnomalyDetection'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministrativeOverride'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('initial'),
                            new \PHPStan\Type\Constant\ConstantStringType('healthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('unhealthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('unhealthy.draining'),
                            new \PHPStan\Type\Constant\ConstantStringType('unused'),
                            new \PHPStan\Type\Constant\ConstantStringType('draining'),
                            new \PHPStan\Type\Constant\ConstantStringType('unavailable'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Elb.RegistrationInProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Elb.InitialHealthChecking'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.ResponseCodeMismatch'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.Timeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.FailedHealthChecks'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.NotRegistered'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.NotInUse'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.DeregistrationInProgress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.InvalidState'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.IpUnusable'),
                            new \PHPStan\Type\Constant\ConstantStringType('Target.HealthCheckDisabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Elb.InternalError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Result'),
                        new \PHPStan\Type\Constant\ConstantStringType('MitigationInEffect'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('anomalous'),
                            new \PHPStan\Type\Constant\ConstantStringType('normal'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('yes'),
                            new \PHPStan\Type\Constant\ConstantStringType('no'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('no_override'),
                            new \PHPStan\Type\Constant\ConstantStringType('zonal_shift_active'),
                            new \PHPStan\Type\Constant\ConstantStringType('zonal_shift_delegated_to_dns'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AdministrativeOverride.Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdministrativeOverride.NoOverride'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdministrativeOverride.ZonalShiftActive'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdministrativeOverride.ZonalShiftDelegatedToDns'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeTrustStoreAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustStoreAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTrustStoreRevocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustStoreRevocations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevocationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RevocationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfRevokedEntries'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CRL'),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTrustStores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustStores'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfCaCertificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalRevokedEntries'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Policy'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTrustStoreCaCertificatesBundle(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTrustStoreRevocationContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function modifyCapacityReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DecreaseRequestsRemaining'),
                new \PHPStan\Type\Constant\ConstantStringType('MinimumLoadBalancerCapacity'),
                new \PHPStan\Type\Constant\ConstantStringType('CapacityReservationState'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CapacityUnits'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('EffectiveCapacityUnits'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('provisioned'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('rebalancing'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ])),
            ]),
        ]);
    }
    private function modifyIpPools(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IpamPools'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv4IpamPoolId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function modifyListener(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Listeners'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('Certificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('SslPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AlpnPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('MutualAuthentication'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IgnoreClientCertificateExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustStoreAssociationStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdvertiseTrustStoreCaNames'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('active'),
                            new \PHPStan\Type\Constant\ConstantStringType('removed'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('on'),
                            new \PHPStan\Type\Constant\ConstantStringType('off'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function modifyListenerAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
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
    private function modifyLoadBalancerAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
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
    private function modifyRule(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('PathPatternConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpRequestMethodConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIpConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function modifyTargetGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckIntervalSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckTimeoutSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthyThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnhealthyThresholdCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('Matcher'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('TCP_UDP'),
                        new \PHPStan\Type\Constant\ConstantStringType('GENEVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HttpCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrpcCode'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('ip'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        new \PHPStan\Type\Constant\ConstantStringType('alb'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function modifyTargetGroupAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
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
    private function modifyTrustStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrustStores'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustStoreArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfCaCertificates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalRevokedEntries'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
    private function registerTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeListenerCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function removeTrustStoreRevocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function setIpAddressType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('dualstack'),
                    new \PHPStan\Type\Constant\ConstantStringType('dualstack-without-public-ipv4'),
                ]),
            ]),
        ]);
    }
    private function setRulePriorities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Rules'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RuleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('Conditions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Actions'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefault'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Field'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('PathPatternConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpRequestMethodConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceIpConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HttpHeaderName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Values'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateOidcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AuthenticateCognitoConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Order'),
                        new \PHPStan\Type\Constant\ConstantStringType('RedirectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FixedResponseConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('forward'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-oidc'),
                            new \PHPStan\Type\Constant\ConstantStringType('authenticate-cognito'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixed-response'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthorizationEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('TokenEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserInfoEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClientSecret'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                            new \PHPStan\Type\Constant\ConstantStringType('UseExistingClientSecret'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolClientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolDomain'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionCookieName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationRequestExtraParams'),
                            new \PHPStan\Type\Constant\ConstantStringType('OnUnauthenticatedRequest'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('deny'),
                                new \PHPStan\Type\Constant\ConstantStringType('allow'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticate'),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Host'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                            new \PHPStan\Type\Constant\ConstantStringType('Query'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_301'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_302'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MessageBody'),
                            new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetGroupStickinessConfig'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TargetGroupArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function setSecurityGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('EnforceSecurityGroupInboundRulesOnPrivateLinkTraffic'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('on'),
                    new \PHPStan\Type\Constant\ConstantStringType('off'),
                ]),
            ]),
        ]);
    }
    private function setSubnets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                new \PHPStan\Type\Constant\ConstantStringType('IpAddressType'),
                new \PHPStan\Type\Constant\ConstantStringType('EnablePrefixForIpv6SourceNat'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ZoneName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutpostId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoadBalancerAddresses'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceNatIpv6Prefixes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllocationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateIPv4Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPv6Address'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('dualstack'),
                    new \PHPStan\Type\Constant\ConstantStringType('dualstack-without-public-ipv4'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('on'),
                    new \PHPStan\Type\Constant\ConstantStringType('off'),
                ]),
            ]),
        ]);
    }
}