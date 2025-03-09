<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppMeshClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AppMesh\AppMeshClient>
     */
    public function getClass(): string
    {
        return \Aws\AppMesh\AppMeshClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createGatewayRoute',
            'createMesh',
            'createRoute',
            'createVirtualGateway',
            'createVirtualNode',
            'createVirtualRouter',
            'createVirtualService',
            'deleteGatewayRoute',
            'deleteMesh',
            'deleteRoute',
            'deleteVirtualGateway',
            'deleteVirtualNode',
            'deleteVirtualRouter',
            'deleteVirtualService',
            'describeGatewayRoute',
            'describeMesh',
            'describeRoute',
            'describeVirtualGateway',
            'describeVirtualNode',
            'describeVirtualRouter',
            'describeVirtualService',
            'listGatewayRoutes',
            'listMeshes',
            'listRoutes',
            'listTagsForResource',
            'listVirtualGateways',
            'listVirtualNodes',
            'listVirtualRouters',
            'listVirtualServices',
            'tagResource',
            'untagResource',
            'updateGatewayRoute',
            'updateMesh',
            'updateRoute',
            'updateVirtualGateway',
            'updateVirtualNode',
            'updateVirtualRouter',
            'updateVirtualService',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createGatewayRoute' => $this->createGatewayRoute(),
            'createMesh' => $this->createMesh(),
            'createRoute' => $this->createRoute(),
            'createVirtualGateway' => $this->createVirtualGateway(),
            'createVirtualNode' => $this->createVirtualNode(),
            'createVirtualRouter' => $this->createVirtualRouter(),
            'createVirtualService' => $this->createVirtualService(),
            'deleteGatewayRoute' => $this->deleteGatewayRoute(),
            'deleteMesh' => $this->deleteMesh(),
            'deleteRoute' => $this->deleteRoute(),
            'deleteVirtualGateway' => $this->deleteVirtualGateway(),
            'deleteVirtualNode' => $this->deleteVirtualNode(),
            'deleteVirtualRouter' => $this->deleteVirtualRouter(),
            'deleteVirtualService' => $this->deleteVirtualService(),
            'describeGatewayRoute' => $this->describeGatewayRoute(),
            'describeMesh' => $this->describeMesh(),
            'describeRoute' => $this->describeRoute(),
            'describeVirtualGateway' => $this->describeVirtualGateway(),
            'describeVirtualNode' => $this->describeVirtualNode(),
            'describeVirtualRouter' => $this->describeVirtualRouter(),
            'describeVirtualService' => $this->describeVirtualService(),
            'listGatewayRoutes' => $this->listGatewayRoutes(),
            'listMeshes' => $this->listMeshes(),
            'listRoutes' => $this->listRoutes(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVirtualGateways' => $this->listVirtualGateways(),
            'listVirtualNodes' => $this->listVirtualNodes(),
            'listVirtualRouters' => $this->listVirtualRouters(),
            'listVirtualServices' => $this->listVirtualServices(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateGatewayRoute' => $this->updateGatewayRoute(),
            'updateMesh' => $this->updateMesh(),
            'updateRoute' => $this->updateRoute(),
            'updateVirtualGateway' => $this->updateVirtualGateway(),
            'updateVirtualNode' => $this->updateVirtualNode(),
            'updateVirtualRouter' => $this->updateVirtualRouter(),
            'updateVirtualService' => $this->updateVirtualService(),
        };
    }
    private function createGatewayRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayRoute'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayRouteName'),
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createMesh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mesh'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('egressFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP_ALL'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('route'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('tcpRoute'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('methodName'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('grpcRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deadline-exceeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('internal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resource-exhausted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('unavailable'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVirtualGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVirtualNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('backends'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                            new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                                new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('outlierDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('baseEjectionDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxEjectionPercent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxServerErrors'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsCloudMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('dns'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOADBALANCER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDPOINTS'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVirtualRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVirtualService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteGatewayRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayRoute'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayRouteName'),
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteMesh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mesh'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('egressFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP_ALL'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('route'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('tcpRoute'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('methodName'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('grpcRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deadline-exceeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('internal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resource-exhausted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('unavailable'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteVirtualGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteVirtualNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('backends'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                            new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                                new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('outlierDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('baseEjectionDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxEjectionPercent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxServerErrors'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsCloudMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('dns'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOADBALANCER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDPOINTS'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteVirtualRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteVirtualService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeGatewayRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayRoute'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayRouteName'),
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeMesh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mesh'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('egressFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP_ALL'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('route'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('tcpRoute'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('methodName'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('grpcRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deadline-exceeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('internal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resource-exhausted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('unavailable'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeVirtualGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeVirtualNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('backends'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                            new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                                new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('outlierDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('baseEjectionDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxEjectionPercent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxServerErrors'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsCloudMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('dns'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOADBALANCER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDPOINTS'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeVirtualRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeVirtualService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listGatewayRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayRoutes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('gatewayRouteName'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMeshes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('meshes'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('routes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('routeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listVirtualGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGateways'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listVirtualNodes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualNodes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listVirtualRouters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualRouters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listVirtualServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualServices'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
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
    private function updateGatewayRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('gatewayRoute'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('gatewayRouteName'),
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('rewrite'),
                                new \PHPStan\Type\Constant\ConstantStringType('target'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultTargetHostname'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('defaultPrefix'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateMesh(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('mesh'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('egressFilter'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ALLOW_ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DROP_ALL'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('route'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('grpcRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2Route'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('priority'),
                        new \PHPStan\Type\Constant\ConstantStringType('tcpRoute'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                                new \PHPStan\Type\Constant\ConstantStringType('methodName'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('grpcRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('cancelled'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deadline-exceeded'),
                                        new \PHPStan\Type\Constant\ConstantStringType('internal'),
                                        new \PHPStan\Type\Constant\ConstantStringType('resource-exhausted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('unavailable'),
                                    ]),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('retryPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('method'),
                                new \PHPStan\Type\Constant\ConstantStringType('path'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                                new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('queryParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheme'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('invert'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                                            new \PHPStan\Type\Constant\ConstantStringType('range'),
                                            new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                            new \PHPStan\Type\Constant\ConstantStringType('suffix'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('end'),
                                                new \PHPStan\Type\Constant\ConstantStringType('start'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRACE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                    new \PHPStan\Type\Constant\ConstantStringType('regex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('httpRetryEvents'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxRetries'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRetryTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tcpRetryEvents'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('connection-error'),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('action'),
                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                            new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('weightedTargets'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('weight'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('idle'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('s'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateVirtualGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateVirtualNode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('backendDefaults'),
                        new \PHPStan\Type\Constant\ConstantStringType('backends'),
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceDiscovery'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\IntegerType(),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('clientPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('tls'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                            new \PHPStan\Type\Constant\ConstantStringType('enforce'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ports'),
                                            new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                ], [
                                                    new \PHPStan\Type\StringType(),
                                                ]),
                                            ]),
                                            new \PHPStan\Type\BooleanType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\IntegerType(),
                                            ])),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                                new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                            ], [
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('match'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                ]),
                                                new \PHPStan\Type\Constant\ConstantArrayType([
                                                    new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('file'),
                                                    new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                                ], [
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateAuthorityArns'),
                                                    ], [
                                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                            new \PHPStan\Type\StringType(),
                                                        ])),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                                        new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                                    ], [
                                                        new \PHPStan\Type\StringType(),
                                                    ]),
                                                ]),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('connectionPool'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthCheck'),
                                new \PHPStan\Type\Constant\ConstantStringType('outlierDetection'),
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('tls'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                        new \PHPStan\Type\Constant\ConstantStringType('maxPendingRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxRequests'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('maxConnections'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('healthyThreshold'),
                                    new \PHPStan\Type\Constant\ConstantStringType('intervalMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMillis'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unhealthyThreshold'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('baseEjectionDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interval'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxEjectionPercent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('maxServerErrors'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('s'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http'),
                                    new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('perRequest'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('idle'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('s'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ms'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('validation'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('acm'),
                                        new \PHPStan\Type\Constant\ConstantStringType('file'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            new \PHPStan\Type\Constant\ConstantStringType('privateKey'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('STRICT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PERMISSIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('subjectAlternativeNames'),
                                        new \PHPStan\Type\Constant\ConstantStringType('trust'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('match'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('exact'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\StringType(),
                                                ])),
                                            ]),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('file'),
                                            new \PHPStan\Type\Constant\ConstantStringType('sds'),
                                        ], [
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('certificateChain'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('secretName'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('accessLog'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('file'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('json'),
                                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('key'),
                                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsCloudMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('dns'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('hostname'),
                                new \PHPStan\Type\Constant\ConstantStringType('ipPreference'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_PREFERRED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv4_ONLY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IPv6_ONLY'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LOADBALANCER'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ENDPOINTS'),
                                ]),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateVirtualRouter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('listeners'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('portMapping'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    new \PHPStan\Type\Constant\ConstantStringType('protocol'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http'),
                                        new \PHPStan\Type\Constant\ConstantStringType('tcp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('grpc'),
                                    ]),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateVirtualService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualService'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('meshName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualServiceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('meshOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceOwner'),
                        new \PHPStan\Type\Constant\ConstantStringType('uid'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualNode'),
                            new \PHPStan\Type\Constant\ConstantStringType('virtualRouter'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualNodeName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('virtualRouterName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}