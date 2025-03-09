<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ApiGatewayClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ApiGateway\ApiGatewayClient>
     */
    public function getClass(): string
    {
        return \Aws\ApiGateway\ApiGatewayClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApiKey',
            'createAuthorizer',
            'createBasePathMapping',
            'createDeployment',
            'createDocumentationPart',
            'createDocumentationVersion',
            'createDomainName',
            'createDomainNameAccessAssociation',
            'createModel',
            'createRequestValidator',
            'createResource',
            'createRestApi',
            'createStage',
            'createUsagePlan',
            'createUsagePlanKey',
            'createVpcLink',
            'deleteApiKey',
            'deleteAuthorizer',
            'deleteBasePathMapping',
            'deleteClientCertificate',
            'deleteDeployment',
            'deleteDocumentationPart',
            'deleteDocumentationVersion',
            'deleteDomainName',
            'deleteDomainNameAccessAssociation',
            'deleteGatewayResponse',
            'deleteIntegration',
            'deleteIntegrationResponse',
            'deleteMethod',
            'deleteMethodResponse',
            'deleteModel',
            'deleteRequestValidator',
            'deleteResource',
            'deleteRestApi',
            'deleteStage',
            'deleteUsagePlan',
            'deleteUsagePlanKey',
            'deleteVpcLink',
            'flushStageAuthorizersCache',
            'flushStageCache',
            'generateClientCertificate',
            'getAccount',
            'getApiKey',
            'getApiKeys',
            'getAuthorizer',
            'getAuthorizers',
            'getBasePathMapping',
            'getBasePathMappings',
            'getClientCertificate',
            'getClientCertificates',
            'getDeployment',
            'getDeployments',
            'getDocumentationPart',
            'getDocumentationParts',
            'getDocumentationVersion',
            'getDocumentationVersions',
            'getDomainName',
            'getDomainNameAccessAssociations',
            'getDomainNames',
            'getExport',
            'getGatewayResponse',
            'getGatewayResponses',
            'getIntegration',
            'getIntegrationResponse',
            'getMethod',
            'getMethodResponse',
            'getModel',
            'getModelTemplate',
            'getModels',
            'getRequestValidator',
            'getRequestValidators',
            'getResource',
            'getResources',
            'getRestApi',
            'getRestApis',
            'getSdk',
            'getSdkType',
            'getSdkTypes',
            'getStage',
            'getStages',
            'getTags',
            'getUsage',
            'getUsagePlan',
            'getUsagePlanKey',
            'getUsagePlanKeys',
            'getUsagePlans',
            'getVpcLink',
            'getVpcLinks',
            'importApiKeys',
            'importDocumentationParts',
            'importRestApi',
            'putGatewayResponse',
            'putIntegration',
            'putIntegrationResponse',
            'putMethod',
            'putMethodResponse',
            'putRestApi',
            'rejectDomainNameAccessAssociation',
            'tagResource',
            'testInvokeAuthorizer',
            'testInvokeMethod',
            'untagResource',
            'updateAccount',
            'updateApiKey',
            'updateAuthorizer',
            'updateBasePathMapping',
            'updateClientCertificate',
            'updateDeployment',
            'updateDocumentationPart',
            'updateDocumentationVersion',
            'updateDomainName',
            'updateGatewayResponse',
            'updateIntegration',
            'updateIntegrationResponse',
            'updateMethod',
            'updateMethodResponse',
            'updateModel',
            'updateRequestValidator',
            'updateResource',
            'updateRestApi',
            'updateStage',
            'updateUsage',
            'updateUsagePlan',
            'updateVpcLink',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApiKey' => $this->createApiKey(),
            'createAuthorizer' => $this->createAuthorizer(),
            'createBasePathMapping' => $this->createBasePathMapping(),
            'createDeployment' => $this->createDeployment(),
            'createDocumentationPart' => $this->createDocumentationPart(),
            'createDocumentationVersion' => $this->createDocumentationVersion(),
            'createDomainName' => $this->createDomainName(),
            'createDomainNameAccessAssociation' => $this->createDomainNameAccessAssociation(),
            'createModel' => $this->createModel(),
            'createRequestValidator' => $this->createRequestValidator(),
            'createResource' => $this->createResource(),
            'createRestApi' => $this->createRestApi(),
            'createStage' => $this->createStage(),
            'createUsagePlan' => $this->createUsagePlan(),
            'createUsagePlanKey' => $this->createUsagePlanKey(),
            'createVpcLink' => $this->createVpcLink(),
            'deleteApiKey' => $this->deleteApiKey(),
            'deleteAuthorizer' => $this->deleteAuthorizer(),
            'deleteBasePathMapping' => $this->deleteBasePathMapping(),
            'deleteClientCertificate' => $this->deleteClientCertificate(),
            'deleteDeployment' => $this->deleteDeployment(),
            'deleteDocumentationPart' => $this->deleteDocumentationPart(),
            'deleteDocumentationVersion' => $this->deleteDocumentationVersion(),
            'deleteDomainName' => $this->deleteDomainName(),
            'deleteDomainNameAccessAssociation' => $this->deleteDomainNameAccessAssociation(),
            'deleteGatewayResponse' => $this->deleteGatewayResponse(),
            'deleteIntegration' => $this->deleteIntegration(),
            'deleteIntegrationResponse' => $this->deleteIntegrationResponse(),
            'deleteMethod' => $this->deleteMethod(),
            'deleteMethodResponse' => $this->deleteMethodResponse(),
            'deleteModel' => $this->deleteModel(),
            'deleteRequestValidator' => $this->deleteRequestValidator(),
            'deleteResource' => $this->deleteResource(),
            'deleteRestApi' => $this->deleteRestApi(),
            'deleteStage' => $this->deleteStage(),
            'deleteUsagePlan' => $this->deleteUsagePlan(),
            'deleteUsagePlanKey' => $this->deleteUsagePlanKey(),
            'deleteVpcLink' => $this->deleteVpcLink(),
            'flushStageAuthorizersCache' => $this->flushStageAuthorizersCache(),
            'flushStageCache' => $this->flushStageCache(),
            'generateClientCertificate' => $this->generateClientCertificate(),
            'getAccount' => $this->getAccount(),
            'getApiKey' => $this->getApiKey(),
            'getApiKeys' => $this->getApiKeys(),
            'getAuthorizer' => $this->getAuthorizer(),
            'getAuthorizers' => $this->getAuthorizers(),
            'getBasePathMapping' => $this->getBasePathMapping(),
            'getBasePathMappings' => $this->getBasePathMappings(),
            'getClientCertificate' => $this->getClientCertificate(),
            'getClientCertificates' => $this->getClientCertificates(),
            'getDeployment' => $this->getDeployment(),
            'getDeployments' => $this->getDeployments(),
            'getDocumentationPart' => $this->getDocumentationPart(),
            'getDocumentationParts' => $this->getDocumentationParts(),
            'getDocumentationVersion' => $this->getDocumentationVersion(),
            'getDocumentationVersions' => $this->getDocumentationVersions(),
            'getDomainName' => $this->getDomainName(),
            'getDomainNameAccessAssociations' => $this->getDomainNameAccessAssociations(),
            'getDomainNames' => $this->getDomainNames(),
            'getExport' => $this->getExport(),
            'getGatewayResponse' => $this->getGatewayResponse(),
            'getGatewayResponses' => $this->getGatewayResponses(),
            'getIntegration' => $this->getIntegration(),
            'getIntegrationResponse' => $this->getIntegrationResponse(),
            'getMethod' => $this->getMethod(),
            'getMethodResponse' => $this->getMethodResponse(),
            'getModel' => $this->getModel(),
            'getModelTemplate' => $this->getModelTemplate(),
            'getModels' => $this->getModels(),
            'getRequestValidator' => $this->getRequestValidator(),
            'getRequestValidators' => $this->getRequestValidators(),
            'getResource' => $this->getResource(),
            'getResources' => $this->getResources(),
            'getRestApi' => $this->getRestApi(),
            'getRestApis' => $this->getRestApis(),
            'getSdk' => $this->getSdk(),
            'getSdkType' => $this->getSdkType(),
            'getSdkTypes' => $this->getSdkTypes(),
            'getStage' => $this->getStage(),
            'getStages' => $this->getStages(),
            'getTags' => $this->getTags(),
            'getUsage' => $this->getUsage(),
            'getUsagePlan' => $this->getUsagePlan(),
            'getUsagePlanKey' => $this->getUsagePlanKey(),
            'getUsagePlanKeys' => $this->getUsagePlanKeys(),
            'getUsagePlans' => $this->getUsagePlans(),
            'getVpcLink' => $this->getVpcLink(),
            'getVpcLinks' => $this->getVpcLinks(),
            'importApiKeys' => $this->importApiKeys(),
            'importDocumentationParts' => $this->importDocumentationParts(),
            'importRestApi' => $this->importRestApi(),
            'putGatewayResponse' => $this->putGatewayResponse(),
            'putIntegration' => $this->putIntegration(),
            'putIntegrationResponse' => $this->putIntegrationResponse(),
            'putMethod' => $this->putMethod(),
            'putMethodResponse' => $this->putMethodResponse(),
            'putRestApi' => $this->putRestApi(),
            'rejectDomainNameAccessAssociation' => $this->rejectDomainNameAccessAssociation(),
            'tagResource' => $this->tagResource(),
            'testInvokeAuthorizer' => $this->testInvokeAuthorizer(),
            'testInvokeMethod' => $this->testInvokeMethod(),
            'untagResource' => $this->untagResource(),
            'updateAccount' => $this->updateAccount(),
            'updateApiKey' => $this->updateApiKey(),
            'updateAuthorizer' => $this->updateAuthorizer(),
            'updateBasePathMapping' => $this->updateBasePathMapping(),
            'updateClientCertificate' => $this->updateClientCertificate(),
            'updateDeployment' => $this->updateDeployment(),
            'updateDocumentationPart' => $this->updateDocumentationPart(),
            'updateDocumentationVersion' => $this->updateDocumentationVersion(),
            'updateDomainName' => $this->updateDomainName(),
            'updateGatewayResponse' => $this->updateGatewayResponse(),
            'updateIntegration' => $this->updateIntegration(),
            'updateIntegrationResponse' => $this->updateIntegrationResponse(),
            'updateMethod' => $this->updateMethod(),
            'updateMethodResponse' => $this->updateMethodResponse(),
            'updateModel' => $this->updateModel(),
            'updateRequestValidator' => $this->updateRequestValidator(),
            'updateResource' => $this->updateResource(),
            'updateRestApi' => $this->updateRestApi(),
            'updateStage' => $this->updateStage(),
            'updateUsage' => $this->updateUsage(),
            'updateUsagePlan' => $this->updateUsagePlan(),
            'updateVpcLink' => $this->updateVpcLink(),
        };
    }
    private function createApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('customerId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stageKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('providerARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerCredentials'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySource'),
                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('COGNITO_USER_POOLS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function createBasePathMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('basePath'),
                new \PHPStan\Type\Constant\ConstantStringType('restApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('stage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('apiSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]))),
            ]),
        ]);
    }
    private function createDocumentationPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('properties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('method'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('PATH_PARAMETER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_PARAMETER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_BODY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_BODY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDocumentationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateName'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateUploadDate'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateName'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('securityPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('mutualTlsAuthentication'),
                new \PHPStan\Type\Constant\ConstantStringType('ownershipVerificationCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('managementPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDomainNameAccessAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainNameAccessAssociationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameArn'),
                new \PHPStan\Type\Constant\ConstantStringType('accessAssociationSourceType'),
                new \PHPStan\Type\Constant\ConstantStringType('accessAssociationSource'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('VPCE'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRequestValidator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('validateRequestBody'),
                new \PHPStan\Type\Constant\ConstantStringType('validateRequestParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('parentId'),
                new \PHPStan\Type\Constant\ConstantStringType('pathPart'),
                new \PHPStan\Type\Constant\ConstantStringType('path'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceMethods'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                    new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function createRestApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('binaryMediaTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumCompressionSize'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeySource'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('disableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('rootResourceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterSize'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('methodSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                new \PHPStan\Type\Constant\ConstantStringType('documentationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('accessLogSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('canarySettings'),
                new \PHPStan\Type\Constant\ConstantStringType('tracingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('0.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('1.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('6.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('13.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('28.4'),
                    new \PHPStan\Type\Constant\ConstantStringType('58.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('118'),
                    new \PHPStan\Type\Constant\ConstantStringType('237'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FLUSH_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('loggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingRateLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheTtlInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheDataEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('requireAuthorizationForCacheControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('unauthorizedCacheControlHeaderStrategy'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL_WITH_403'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITH_RESPONSE_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITHOUT_RESPONSE_HEADER'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('percentTraffic'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageVariableOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('useStageCache'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createUsagePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('apiStages'),
                new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                new \PHPStan\Type\Constant\ConstantStringType('quota'),
                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('limit'),
                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createUsagePlanKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('targetArns'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteApiKey(): ?\PHPStan\Type\Type
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
    private function deleteBasePathMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteClientCertificate(): ?\PHPStan\Type\Type
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
    private function deleteDocumentationPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDocumentationVersion(): ?\PHPStan\Type\Type
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
    private function deleteDomainNameAccessAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteGatewayResponse(): ?\PHPStan\Type\Type
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
    private function deleteMethod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMethodResponse(): ?\PHPStan\Type\Type
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
    private function deleteRequestValidator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRestApi(): ?\PHPStan\Type\Type
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
    private function deleteUsagePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteUsagePlanKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function flushStageAuthorizersCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function flushStageCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function generateClientCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('pemEncodedCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cloudwatchRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('throttleSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('features'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeyVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('customerId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stageKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getApiKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageKeys'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('providerARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerCredentials'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySource'),
                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('COGNITO_USER_POOLS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getAuthorizers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerARNs'),
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('identitySource'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                            new \PHPStan\Type\Constant\ConstantStringType('COGNITO_USER_POOLS'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getBasePathMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('basePath'),
                new \PHPStan\Type\Constant\ConstantStringType('restApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('stage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBasePathMappings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('basePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('restApiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getClientCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('pemEncodedCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getClientCertificates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('pemEncodedCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('apiSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]))),
            ]),
        ]);
    }
    private function getDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('apiSummary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]))),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDocumentationPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('properties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('method'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('PATH_PARAMETER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_PARAMETER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_BODY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_BODY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDocumentationParts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('properties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('path'),
                            new \PHPStan\Type\Constant\ConstantStringType('method'),
                            new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API'),
                                new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                                new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                                new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                                new \PHPStan\Type\Constant\ConstantStringType('PATH_PARAMETER'),
                                new \PHPStan\Type\Constant\ConstantStringType('QUERY_PARAMETER'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('REQUEST_BODY'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESPONSE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_BODY'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDocumentationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDocumentationVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateName'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateUploadDate'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateName'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('securityPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('mutualTlsAuthentication'),
                new \PHPStan\Type\Constant\ConstantStringType('ownershipVerificationCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('managementPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDomainNameAccessAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainNameAccessAssociationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainNameArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('accessAssociationSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('accessAssociationSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('VPCE'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getDomainNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainNameId'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainNameArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateUploadDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionalDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionalHostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateName'),
                        new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('distributionDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('distributionHostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainNameStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('domainNameStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('mutualTlsAuthentication'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownershipVerificationCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('managementPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('policy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('truststoreUri'),
                            new \PHPStan\Type\Constant\ConstantStringType('truststoreVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('truststoreWarnings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getExport(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('contentDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('body'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getGatewayResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultResponse'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_4XX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_5XX'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNAUTHORIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_API_KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_CONFIGURATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_SIGNATURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED_TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_AUTHENTICATION_TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_CONFIGURATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_MEDIA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_PARAMETERS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_BODY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST_TOO_LARGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAF_FILTERED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getGatewayResponses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultResponse'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_4XX'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_5XX'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNAUTHORIZED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_CONFIGURATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('INVALID_SIGNATURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPIRED_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('MISSING_AUTHENTICATION_TOKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_FAILURE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_TIMEOUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_CONFIGURATION_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_MEDIA_TYPE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_PARAMETERS'),
                            new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_BODY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUEST_TOO_LARGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('WAF_FILTERED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function getIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
            ]),
        ]);
    }
    private function getMethod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getMethodResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
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
                new \PHPStan\Type\Constant\ConstantStringType('value'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getModels(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('schema'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getRequestValidator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('validateRequestBody'),
                new \PHPStan\Type\Constant\ConstantStringType('validateRequestParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getRequestValidators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('validateRequestBody'),
                        new \PHPStan\Type\Constant\ConstantStringType('validateRequestParameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('parentId'),
                new \PHPStan\Type\Constant\ConstantStringType('pathPart'),
                new \PHPStan\Type\Constant\ConstantStringType('path'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceMethods'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                    new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function getResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('pathPart'),
                        new \PHPStan\Type\Constant\ConstantStringType('path'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceMethods'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                            new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                            new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                            new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                            new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                                new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                                new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                                new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                                new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                                new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                                    new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                                    ]),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getRestApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('binaryMediaTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumCompressionSize'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeySource'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('disableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('rootResourceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRestApis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                        new \PHPStan\Type\Constant\ConstantStringType('binaryMediaTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('minimumCompressionSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('apiKeySource'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('policy'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('disableExecuteApiEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('rootResourceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                                ]),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getSdk(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('contentDisposition'),
                new \PHPStan\Type\Constant\ConstantStringType('body'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getSdkType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('friendlyName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('configurationProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('friendlyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('required'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getSdkTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('friendlyName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('configurationProperties'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('friendlyName'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('required'),
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterSize'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('methodSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                new \PHPStan\Type\Constant\ConstantStringType('documentationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('accessLogSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('canarySettings'),
                new \PHPStan\Type\Constant\ConstantStringType('tracingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('0.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('1.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('6.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('13.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('28.4'),
                    new \PHPStan\Type\Constant\ConstantStringType('58.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('118'),
                    new \PHPStan\Type\Constant\ConstantStringType('237'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FLUSH_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('loggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingRateLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheTtlInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheDataEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('requireAuthorizationForCacheControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('unauthorizedCacheControlHeaderStrategy'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL_WITH_403'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITH_RESPONSE_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITHOUT_RESPONSE_HEADER'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('percentTraffic'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageVariableOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('useStageCache'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getStages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('item'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheClusterEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheClusterSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheClusterStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('methodSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('variables'),
                        new \PHPStan\Type\Constant\ConstantStringType('documentationVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('accessLogSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('canarySettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('tracingEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('0.5'),
                            new \PHPStan\Type\Constant\ConstantStringType('1.6'),
                            new \PHPStan\Type\Constant\ConstantStringType('6.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('13.5'),
                            new \PHPStan\Type\Constant\ConstantStringType('28.4'),
                            new \PHPStan\Type\Constant\ConstantStringType('58.2'),
                            new \PHPStan\Type\Constant\ConstantStringType('118'),
                            new \PHPStan\Type\Constant\ConstantStringType('237'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FLUSH_IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('metricsEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('loggingLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataTraceEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('throttlingBurstLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('throttlingRateLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('cachingEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('cacheTtlInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('cacheDataEncrypted'),
                            new \PHPStan\Type\Constant\ConstantStringType('requireAuthorizationForCacheControl'),
                            new \PHPStan\Type\Constant\ConstantStringType('unauthorizedCacheControlHeaderStrategy'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAIL_WITH_403'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITH_RESPONSE_HEADER'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITHOUT_RESPONSE_HEADER'),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('format'),
                            new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('percentTraffic'),
                            new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('stageVariableOverrides'),
                            new \PHPStan\Type\Constant\ConstantStringType('useStageCache'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usagePlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]))),
            ]),
        ]);
    }
    private function getUsagePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('apiStages'),
                new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                new \PHPStan\Type\Constant\ConstantStringType('quota'),
                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('limit'),
                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getUsagePlanKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUsagePlanKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getUsagePlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('apiStages'),
                        new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                        new \PHPStan\Type\Constant\ConstantStringType('quota'),
                        new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                                new \PHPStan\Type\Constant\ConstantStringType('stage'),
                                new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                ])),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('limit'),
                            new \PHPStan\Type\Constant\ConstantStringType('offset'),
                            new \PHPStan\Type\Constant\ConstantStringType('period'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('targetArns'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getVpcLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
            ]),
        ]);
    }
    private function importApiKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function importDocumentationParts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ids'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function importRestApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('binaryMediaTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumCompressionSize'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeySource'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('disableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('rootResourceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putGatewayResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultResponse'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_4XX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_5XX'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNAUTHORIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_API_KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_CONFIGURATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_SIGNATURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED_TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_AUTHENTICATION_TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_CONFIGURATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_MEDIA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_PARAMETERS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_BODY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST_TOO_LARGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAF_FILTERED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function putIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function putIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
            ]),
        ]);
    }
    private function putMethod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function putMethodResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function putRestApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('binaryMediaTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumCompressionSize'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeySource'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('disableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('rootResourceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rejectDomainNameAccessAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function testInvokeAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('log'),
                new \PHPStan\Type\Constant\ConstantStringType('latency'),
                new \PHPStan\Type\Constant\ConstantStringType('principalId'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('authorization'),
                new \PHPStan\Type\Constant\ConstantStringType('claims'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ]))),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function testInvokeMethod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('body'),
                new \PHPStan\Type\Constant\ConstantStringType('headers'),
                new \PHPStan\Type\Constant\ConstantStringType('multiValueHeaders'),
                new \PHPStan\Type\Constant\ConstantStringType('log'),
                new \PHPStan\Type\Constant\ConstantStringType('latency'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ]))),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cloudwatchRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('throttleSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('features'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeyVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('value'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('customerId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
                new \PHPStan\Type\Constant\ConstantStringType('stageKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateAuthorizer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('providerARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('authType'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerCredentials'),
                new \PHPStan\Type\Constant\ConstantStringType('identitySource'),
                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('COGNITO_USER_POOLS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function updateBasePathMapping(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('basePath'),
                new \PHPStan\Type\Constant\ConstantStringType('restApiId'),
                new \PHPStan\Type\Constant\ConstantStringType('stage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateClientCertificate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('pemEncodedCertificate'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('apiSummary'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]))),
            ]),
        ]);
    }
    private function updateDocumentationPart(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('properties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('path'),
                    new \PHPStan\Type\Constant\ConstantStringType('method'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODEL'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('METHOD'),
                        new \PHPStan\Type\Constant\ConstantStringType('PATH_PARAMETER'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUERY_PARAMETER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUEST_BODY'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESPONSE_BODY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDocumentationVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameId'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateName'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('certificateUploadDate'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateName'),
                new \PHPStan\Type\Constant\ConstantStringType('regionalCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionDomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('domainNameStatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('securityPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('mutualTlsAuthentication'),
                new \PHPStan\Type\Constant\ConstantStringType('ownershipVerificationCertificateArn'),
                new \PHPStan\Type\Constant\ConstantStringType('managementPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_CERTIFICATE_REIMPORT'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_OWNERSHIP_VERIFICATION'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_1_0'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLS_1_2'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreUri'),
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('truststoreWarnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGatewayResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('responseType'),
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('defaultResponse'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_4XX'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_5XX'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNAUTHORIZED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_API_KEY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCESS_DENIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER_CONFIGURATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_SIGNATURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED_TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_AUTHENTICATION_TOKEN'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_FAILURE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATION_TIMEOUT'),
                    new \PHPStan\Type\Constant\ConstantStringType('API_CONFIGURATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_MEDIA_TYPE'),
                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_PARAMETERS'),
                    new \PHPStan\Type\Constant\ConstantStringType('BAD_REQUEST_BODY'),
                    new \PHPStan\Type\Constant\ConstantStringType('REQUEST_TOO_LARGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('THROTTLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('QUOTA_EXCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WAF_FILTERED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateIntegration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('uri'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function updateIntegrationResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                    new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                ]),
            ]),
        ]);
    }
    private function updateMethod(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('uri'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateMethodResponse(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateModel(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRequestValidator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('validateRequestBody'),
                new \PHPStan\Type\Constant\ConstantStringType('validateRequestParameters'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function updateResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('parentId'),
                new \PHPStan\Type\Constant\ConstantStringType('pathPart'),
                new \PHPStan\Type\Constant\ConstantStringType('path'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceMethods'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiKeyRequired'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestValidatorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('operationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestModels'),
                    new \PHPStan\Type\Constant\ConstantStringType('methodResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('methodIntegration'),
                    new \PHPStan\Type\Constant\ConstantStringType('authorizationScopes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('responseModels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\BooleanType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('uri'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionType'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('credentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('requestTemplates'),
                        new \PHPStan\Type\Constant\ConstantStringType('passthroughBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInMillis'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheNamespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('cacheKeyParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('integrationResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('tlsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('MOCK'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_PROXY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_PROXY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INTERNET'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC_LINK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('statusCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('selectionPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('responseParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('responseTemplates'),
                            new \PHPStan\Type\Constant\ConstantStringType('contentHandling'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_BINARY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONVERT_TO_TEXT'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('insecureSkipVerification'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function updateRestApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('warnings'),
                new \PHPStan\Type\Constant\ConstantStringType('binaryMediaTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumCompressionSize'),
                new \PHPStan\Type\Constant\ConstantStringType('apiKeySource'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('disableExecuteApiEndpoint'),
                new \PHPStan\Type\Constant\ConstantStringType('rootResourceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEADER'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTHORIZER'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('types'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcEndpointIds'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REGIONAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientCertificateId'),
                new \PHPStan\Type\Constant\ConstantStringType('stageName'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterSize'),
                new \PHPStan\Type\Constant\ConstantStringType('cacheClusterStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('methodSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('variables'),
                new \PHPStan\Type\Constant\ConstantStringType('documentationVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('accessLogSettings'),
                new \PHPStan\Type\Constant\ConstantStringType('canarySettings'),
                new \PHPStan\Type\Constant\ConstantStringType('tracingEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
                new \PHPStan\Type\Constant\ConstantStringType('lastUpdatedDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('0.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('1.6'),
                    new \PHPStan\Type\Constant\ConstantStringType('6.1'),
                    new \PHPStan\Type\Constant\ConstantStringType('13.5'),
                    new \PHPStan\Type\Constant\ConstantStringType('28.4'),
                    new \PHPStan\Type\Constant\ConstantStringType('58.2'),
                    new \PHPStan\Type\Constant\ConstantStringType('118'),
                    new \PHPStan\Type\Constant\ConstantStringType('237'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FLUSH_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('metricsEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('loggingLevel'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataTraceEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingBurstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('throttlingRateLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheTtlInSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheDataEncrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('requireAuthorizationForCacheControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('unauthorizedCacheControlHeaderStrategy'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL_WITH_403'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITH_RESPONSE_HEADER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED_WITHOUT_RESPONSE_HEADER'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('percentTraffic'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('stageVariableOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('useStageCache'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('usagePlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('startDate'),
                new \PHPStan\Type\Constant\ConstantStringType('endDate'),
                new \PHPStan\Type\Constant\ConstantStringType('position'),
                new \PHPStan\Type\Constant\ConstantStringType('items'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\IntegerType(),
                    ])),
                ]))),
            ]),
        ]);
    }
    private function updateUsagePlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('apiStages'),
                new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                new \PHPStan\Type\Constant\ConstantStringType('quota'),
                new \PHPStan\Type\Constant\ConstantStringType('productCode'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('throttle'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('burstLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('rateLimit'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('limit'),
                    new \PHPStan\Type\Constant\ConstantStringType('offset'),
                    new \PHPStan\Type\Constant\ConstantStringType('period'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateVpcLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('targetArns'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}