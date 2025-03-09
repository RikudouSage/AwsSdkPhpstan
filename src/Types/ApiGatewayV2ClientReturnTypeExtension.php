<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApiGatewayV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApiGatewayV2\ApiGatewayV2Client>
     */
    public function getClass(): string
    {
        return \Aws\ApiGatewayV2\ApiGatewayV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApi',
            'createApiMapping',
            'createAuthorizer',
            'createDeployment',
            'createDomainName',
            'createIntegration',
            'createIntegrationResponse',
            'createModel',
            'createRoute',
            'createRouteResponse',
            'createStage',
            'createVpcLink',
            'deleteAccessLogSettings',
            'deleteApi',
            'deleteApiMapping',
            'deleteAuthorizer',
            'deleteCorsConfiguration',
            'deleteDeployment',
            'deleteDomainName',
            'deleteIntegration',
            'deleteIntegrationResponse',
            'deleteModel',
            'deleteRoute',
            'deleteRouteRequestParameter',
            'deleteRouteResponse',
            'deleteRouteSettings',
            'deleteStage',
            'deleteVpcLink',
            'exportApi',
            'resetAuthorizersCache',
            'getApi',
            'getApiMapping',
            'getApiMappings',
            'getApis',
            'getAuthorizer',
            'getAuthorizers',
            'getDeployment',
            'getDeployments',
            'getDomainName',
            'getDomainNames',
            'getIntegration',
            'getIntegrationResponse',
            'getIntegrationResponses',
            'getIntegrations',
            'getModel',
            'getModelTemplate',
            'getModels',
            'getRoute',
            'getRouteResponse',
            'getRouteResponses',
            'getRoutes',
            'getStage',
            'getStages',
            'getTags',
            'getVpcLink',
            'getVpcLinks',
            'importApi',
            'reimportApi',
            'tagResource',
            'untagResource',
            'updateApi',
            'updateApiMapping',
            'updateAuthorizer',
            'updateDeployment',
            'updateDomainName',
            'updateIntegration',
            'updateIntegrationResponse',
            'updateModel',
            'updateRoute',
            'updateRouteResponse',
            'updateStage',
            'updateVpcLink',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApi' => $this->createApi(),
            'createApiMapping' => $this->createApiMapping(),
            'createAuthorizer' => $this->createAuthorizer(),
            'createDeployment' => $this->createDeployment(),
            'createDomainName' => $this->createDomainName(),
            'createIntegration' => $this->createIntegration(),
            'createIntegrationResponse' => $this->createIntegrationResponse(),
            'createModel' => $this->createModel(),
            'createRoute' => $this->createRoute(),
            'createRouteResponse' => $this->createRouteResponse(),
            'createStage' => $this->createStage(),
            'createVpcLink' => $this->createVpcLink(),
            'deleteAccessLogSettings' => $this->deleteAccessLogSettings(),
            'deleteApi' => $this->deleteApi(),
            'deleteApiMapping' => $this->deleteApiMapping(),
            'deleteAuthorizer' => $this->deleteAuthorizer(),
            'deleteCorsConfiguration' => $this->deleteCorsConfiguration(),
            'deleteDeployment' => $this->deleteDeployment(),
            'deleteDomainName' => $this->deleteDomainName(),
            'deleteIntegration' => $this->deleteIntegration(),
            'deleteIntegrationResponse' => $this->deleteIntegrationResponse(),
            'deleteModel' => $this->deleteModel(),
            'deleteRoute' => $this->deleteRoute(),
            'deleteRouteRequestParameter' => $this->deleteRouteRequestParameter(),
            'deleteRouteResponse' => $this->deleteRouteResponse(),
            'deleteRouteSettings' => $this->deleteRouteSettings(),
            'deleteStage' => $this->deleteStage(),
            'deleteVpcLink' => $this->deleteVpcLink(),
            'exportApi' => $this->exportApi(),
            'resetAuthorizersCache' => $this->resetAuthorizersCache(),
            'getApi' => $this->getApi(),
            'getApiMapping' => $this->getApiMapping(),
            'getApiMappings' => $this->getApiMappings(),
            'getApis' => $this->getApis(),
            'getAuthorizer' => $this->getAuthorizer(),
            'getAuthorizers' => $this->getAuthorizers(),
            'getDeployment' => $this->getDeployment(),
            'getDeployments' => $this->getDeployments(),
            'getDomainName' => $this->getDomainName(),
            'getDomainNames' => $this->getDomainNames(),
            'getIntegration' => $this->getIntegration(),
            'getIntegrationResponse' => $this->getIntegrationResponse(),
            'getIntegrationResponses' => $this->getIntegrationResponses(),
            'getIntegrations' => $this->getIntegrations(),
            'getModel' => $this->getModel(),
            'getModelTemplate' => $this->getModelTemplate(),
            'getModels' => $this->getModels(),
            'getRoute' => $this->getRoute(),
            'getRouteResponse' => $this->getRouteResponse(),
            'getRouteResponses' => $this->getRouteResponses(),
            'getRoutes' => $this->getRoutes(),
            'getStage' => $this->getStage(),
            'getStages' => $this->getStages(),
            'getTags' => $this->getTags(),
            'getVpcLink' => $this->getVpcLink(),
            'getVpcLinks' => $this->getVpcLinks(),
            'importApi' => $this->importApi(),
            'reimportApi' => $this->reimportApi(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApi' => $this->updateApi(),
            'updateApiMapping' => $this->updateApiMapping(),
            'updateAuthorizer' => $this->updateAuthorizer(),
            'updateDeployment' => $this->updateDeployment(),
            'updateDomainName' => $this->updateDomainName(),
            'updateIntegration' => $this->updateIntegration(),
            'updateIntegrationResponse' => $this->updateIntegrationResponse(),
            'updateModel' => $this->updateModel(),
            'updateRoute' => $this->updateRoute(),
            'updateRouteResponse' => $this->updateRouteResponse(),
            'updateStage' => $this->updateStage(),
            'updateVpcLink' => $this->updateVpcLink(),
        };
    }
    private function createApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableSchemaValidation'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createApiMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingKey'),
                new \PHPStan\Type\Constant\ConstantStringType('Stage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerCredentialsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerResultTtlInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerType'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerUri'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySource'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityValidationExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('JwtConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerPayloadFormatVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableSimpleResponses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoDeployed'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainNameConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('MutualTlsAuthentication'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateUploadDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnershipVerificationCertificateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('CredentialsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationSubtype'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('PassthroughBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('PayloadFormatVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeoutInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('TlsConfig'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_MATCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_TEMPLATES'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerNameToVerify'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeyRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizationScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestModels'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteKey'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRouteResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseModels'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseKey'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessLogSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoDeploy'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LastDeploymentStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                new \PHPStan\Type\Constant\ConstantStringType('StageVariables'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkId'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkVersion'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('V2'),
            ]),
        ]);
    }
    private function deleteAccessLogSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteApiMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCorsConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRouteRequestParameter(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRouteResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRouteSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function exportApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('body'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function resetAuthorizersCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableSchemaValidation'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getApiMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingKey'),
                new \PHPStan\Type\Constant\ConstantStringType('Stage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getApiMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiMappingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiMappingKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getApis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableSchemaValidation'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableExecuteApiEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerCredentialsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerResultTtlInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerType'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerUri'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySource'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityValidationExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('JwtConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerPayloadFormatVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableSimpleResponses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getAuthorizers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerCredentialsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerResultTtlInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentitySource'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityValidationExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('JwtConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerPayloadFormatVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableSimpleResponses'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                        new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoDeployed'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoDeployed'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainNameConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('MutualTlsAuthentication'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateUploadDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnershipVerificationCertificateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDomainNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiMappingSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('MutualTlsAuthentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateUploadDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnershipVerificationCertificateArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TruststoreUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('TruststoreVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('TruststoreWarnings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('CredentialsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationSubtype'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('PassthroughBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('PayloadFormatVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeoutInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('TlsConfig'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_MATCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_TEMPLATES'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerNameToVerify'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIntegrationResponses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getIntegrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                    new \PHPStan\Type\Constant\ConstantStringType('CredentialsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationSubtype'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IntegrationUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('PassthroughBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('PayloadFormatVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('TlsConfig'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_MATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                        new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_TEMPLATES'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServerNameToVerify'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModelTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Value'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeyRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizationScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestModels'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteKey'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRouteResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseModels'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseKey'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRouteResponses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseModels'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteResponseId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteResponseKey'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiKeyRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizationScopes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestModels'),
                    new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteResponseSelectionExpression'),
                    new \PHPStan\Type\Constant\ConstantStringType('Target'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Required'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessLogSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoDeploy'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LastDeploymentStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                new \PHPStan\Type\Constant\ConstantStringType('StageVariables'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getStages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccessLogSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoDeploy'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastDeploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteSettings'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StageVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Format'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                        new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkId'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkVersion'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('V2'),
            ]),
        ]);
    }
    private function getVpcLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcLinkVersion'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('V2'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableSchemaValidation'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function reimportApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableSchemaValidation'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
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
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeySelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('CorsConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableSchemaValidation'),
                new \PHPStan\Type\Constant\ConstantStringType('DisableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('ProtocolType'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowMethods'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowOrigins'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExposeHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxAge'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WEBSOCKET'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateApiMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingId'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingKey'),
                new \PHPStan\Type\Constant\ConstantStringType('Stage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerCredentialsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerResultTtlInSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerType'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerUri'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentitySource'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityValidationExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('JwtConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerPayloadFormatVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableSimpleResponses'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Audience'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoDeployed'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiMappingSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('DomainNameConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('MutualTlsAuthentication'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CertificateUploadDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainNameStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndpointType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnershipVerificationCertificateArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TruststoreWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionType'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('CredentialsArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationSubtype'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationType'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationUri'),
                new \PHPStan\Type\Constant\ConstantStringType('PassthroughBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('PayloadFormatVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeoutInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('TlsConfig'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_MATCH'),
                    new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                    new \PHPStan\Type\Constant\ConstantStringType('WHEN_NO_TEMPLATES'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServerNameToVerify'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentHandlingStrategy'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseId'),
                new \PHPStan\Type\Constant\ConstantStringType('IntegrationResponseKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateSelectionExpression'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelId'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiKeyRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizationScopes'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestModels'),
                new \PHPStan\Type\Constant\ConstantStringType('RequestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteKey'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('Target'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    new \PHPStan\Type\Constant\ConstantStringType('JWT'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRouteResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ModelSelectionExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseModels'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseId'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteResponseKey'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Required'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessLogSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('ApiGatewayManaged'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoDeploy'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultRouteSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('DeploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LastDeploymentStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('StageName'),
                new \PHPStan\Type\Constant\ConstantStringType('StageVariables'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedMetricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('LoggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThrottlingRateLimit'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                        new \PHPStan\Type\Constant\ConstantStringType('OFF'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkId'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcLinkVersion'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('V2'),
            ]),
        ]);
    }
}