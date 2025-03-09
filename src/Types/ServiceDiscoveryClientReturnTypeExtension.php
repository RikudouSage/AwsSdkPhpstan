<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ServiceDiscoveryClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ServiceDiscovery\ServiceDiscoveryClient>
     */
    public function getClass(): string
    {
        return \Aws\ServiceDiscovery\ServiceDiscoveryClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createHttpNamespace',
            'createPrivateDnsNamespace',
            'createPublicDnsNamespace',
            'createService',
            'deleteNamespace',
            'deleteService',
            'deleteServiceAttributes',
            'deregisterInstance',
            'discoverInstances',
            'discoverInstancesRevision',
            'getInstance',
            'getInstancesHealthStatus',
            'getNamespace',
            'getOperation',
            'getService',
            'getServiceAttributes',
            'listInstances',
            'listNamespaces',
            'listOperations',
            'listServices',
            'listTagsForResource',
            'registerInstance',
            'tagResource',
            'untagResource',
            'updateHttpNamespace',
            'updateInstanceCustomHealthStatus',
            'updatePrivateDnsNamespace',
            'updatePublicDnsNamespace',
            'updateService',
            'updateServiceAttributes',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createHttpNamespace' => $this->createHttpNamespace(),
            'createPrivateDnsNamespace' => $this->createPrivateDnsNamespace(),
            'createPublicDnsNamespace' => $this->createPublicDnsNamespace(),
            'createService' => $this->createService(),
            'deleteNamespace' => $this->deleteNamespace(),
            'deleteService' => $this->deleteService(),
            'deleteServiceAttributes' => $this->deleteServiceAttributes(),
            'deregisterInstance' => $this->deregisterInstance(),
            'discoverInstances' => $this->discoverInstances(),
            'discoverInstancesRevision' => $this->discoverInstancesRevision(),
            'getInstance' => $this->getInstance(),
            'getInstancesHealthStatus' => $this->getInstancesHealthStatus(),
            'getNamespace' => $this->getNamespace(),
            'getOperation' => $this->getOperation(),
            'getService' => $this->getService(),
            'getServiceAttributes' => $this->getServiceAttributes(),
            'listInstances' => $this->listInstances(),
            'listNamespaces' => $this->listNamespaces(),
            'listOperations' => $this->listOperations(),
            'listServices' => $this->listServices(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerInstance' => $this->registerInstance(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateHttpNamespace' => $this->updateHttpNamespace(),
            'updateInstanceCustomHealthStatus' => $this->updateInstanceCustomHealthStatus(),
            'updatePrivateDnsNamespace' => $this->updatePrivateDnsNamespace(),
            'updatePublicDnsNamespace' => $this->updatePublicDnsNamespace(),
            'updateService' => $this->updateService(),
            'updateServiceAttributes' => $this->updateServiceAttributes(),
        };
    }
    private function createHttpNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPrivateDnsNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPublicDnsNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('NamespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckCustomConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NamespaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsRecords'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIVALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEIGHTED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNS_HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServiceAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function discoverInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('InstancesRevision'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('NamespaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function discoverInstancesRevision(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstancesRevision'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getInstancesHealthStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DNS_PUBLIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNS_PRIVATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DnsProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpProperties'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HttpName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Operation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Targets'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_NAMESPACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_NAMESPACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NAMESPACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTER_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTER_INSTANCE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NAMESPACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSTANCE'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('NamespaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DnsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckCustomConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatorRequestId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('NamespaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsRecords'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MULTIVALUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEIGHTED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNS_HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNS'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceAttributes'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNamespaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Namespaces'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_PUBLIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_PRIVATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DnsProperties'),
                            new \PHPStan\Type\Constant\ConstantStringType('HttpProperties'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HttpName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Operations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUBMITTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                        ]),
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
                new \PHPStan\Type\Constant\ConstantStringType('Services'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DnsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthCheckCustomConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS_HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('NamespaceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoutingPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('DnsRecords'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('MULTIVALUE'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEIGHTED'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function registerInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateHttpNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateInstanceCustomHealthStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updatePrivateDnsNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePublicDnsNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateServiceAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}