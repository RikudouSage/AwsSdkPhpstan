<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MigrationHubRefactorSpacesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MigrationHubRefactorSpaces\MigrationHubRefactorSpacesClient>
     */
    public function getClass(): string
    {
        return \Aws\MigrationHubRefactorSpaces\MigrationHubRefactorSpacesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApplication',
            'createEnvironment',
            'createRoute',
            'createService',
            'deleteApplication',
            'deleteEnvironment',
            'deleteResourcePolicy',
            'deleteRoute',
            'deleteService',
            'getApplication',
            'getEnvironment',
            'getResourcePolicy',
            'getRoute',
            'getService',
            'listApplications',
            'listEnvironmentVpcs',
            'listEnvironments',
            'listRoutes',
            'listServices',
            'listTagsForResource',
            'putResourcePolicy',
            'tagResource',
            'untagResource',
            'updateRoute',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApplication' => $this->createApplication(),
            'createEnvironment' => $this->createEnvironment(),
            'createRoute' => $this->createRoute(),
            'createService' => $this->createService(),
            'deleteApplication' => $this->deleteApplication(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteRoute' => $this->deleteRoute(),
            'deleteService' => $this->deleteService(),
            'getApplication' => $this->getApplication(),
            'getEnvironment' => $this->getEnvironment(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getRoute' => $this->getRoute(),
            'getService' => $this->getService(),
            'listApplications' => $this->listApplications(),
            'listEnvironmentVpcs' => $this->listEnvironmentVpcs(),
            'listEnvironments' => $this->listEnvironments(),
            'listRoutes' => $this->listRoutes(),
            'listServices' => $this->listServices(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateRoute' => $this->updateRoute(),
        };
    }
    private function createApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayProxy'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ProxyType'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkFabricType'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteType'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UriPathRoute'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('URI_PATH'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ActivationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('AppendSourcePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeChildPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('Methods'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourcePath'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('LambdaEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UrlEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HealthUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
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
    private function deleteRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
            ]),
        ]);
    }
    private function deleteService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function getApplication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayProxy'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ProxyType'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NlbArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('NlbName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxyUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcLinkId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkFabricType'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function getRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AppendSourcePath'),
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeChildPaths'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Methods'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('PathResourceToId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteType'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SourcePath'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                    ]),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                    new \PHPStan\Type\Constant\ConstantStringType('URI_PATH'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Error'),
                new \PHPStan\Type\Constant\ConstantStringType('LambdaEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('UrlEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                    new \PHPStan\Type\Constant\ConstantStringType('URL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                        new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('HealthUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('Url'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApplications(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayProxy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxyType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('NlbArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('NlbName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProxyUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcLinkId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironmentVpcs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentVpcList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CidrBlocks'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EnvironmentSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFabricType'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AppendSourcePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeChildPaths'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Methods'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathResourceToId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourcePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('URI_PATH'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSummaryList'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedByAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnvironmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    new \PHPStan\Type\Constant\ConstantStringType('LambdaEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('UrlEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('URL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AdditionalDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_RESOURCE_STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_CREATION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_UPDATE_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE_ENDPOINT_HEALTH_CHECK_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_DELETION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_RETRIEVAL_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATE_TRANSITION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_LIMIT_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPLICATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NLB'),
                            new \PHPStan\Type\Constant\ConstantStringType('TARGET_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('LOAD_BALANCER_LISTENER'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUBNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('ROUTE_TABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECURITY_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_ENDPOINT_SERVICE_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_SHARE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAM_ROLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HealthUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApplicationId'),
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('ServiceId'),
                new \PHPStan\Type\Constant\ConstantStringType('State'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
            ]),
        ]);
    }
}