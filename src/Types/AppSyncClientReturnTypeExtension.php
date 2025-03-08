<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AppSyncClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\AppSync\AppSyncClient>
     */
    public function getClass(): string
    {
        return \Aws\AppSync\AppSyncClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateApi',
            'associateMergedGraphqlApi',
            'associateSourceGraphqlApi',
            'createApi',
            'createApiCache',
            'createApiKey',
            'createChannelNamespace',
            'createDataSource',
            'createDomainName',
            'createFunction',
            'createGraphqlApi',
            'createResolver',
            'createType',
            'deleteApi',
            'deleteApiCache',
            'deleteApiKey',
            'deleteChannelNamespace',
            'deleteDataSource',
            'deleteDomainName',
            'deleteFunction',
            'deleteGraphqlApi',
            'deleteResolver',
            'deleteType',
            'disassociateApi',
            'disassociateMergedGraphqlApi',
            'disassociateSourceGraphqlApi',
            'evaluateCode',
            'evaluateMappingTemplate',
            'flushApiCache',
            'getApi',
            'getApiAssociation',
            'getApiCache',
            'getChannelNamespace',
            'getDataSource',
            'getDataSourceIntrospection',
            'getDomainName',
            'getFunction',
            'getGraphqlApi',
            'getGraphqlApiEnvironmentVariables',
            'getIntrospectionSchema',
            'getResolver',
            'getSchemaCreationStatus',
            'getSourceApiAssociation',
            'getType',
            'listApiKeys',
            'listApis',
            'listChannelNamespaces',
            'listDataSources',
            'listDomainNames',
            'listFunctions',
            'listGraphqlApis',
            'listResolvers',
            'listResolversByFunction',
            'listSourceApiAssociations',
            'listTagsForResource',
            'listTypes',
            'listTypesByAssociation',
            'putGraphqlApiEnvironmentVariables',
            'startDataSourceIntrospection',
            'startSchemaCreation',
            'startSchemaMerge',
            'tagResource',
            'untagResource',
            'updateApi',
            'updateApiCache',
            'updateApiKey',
            'updateChannelNamespace',
            'updateDataSource',
            'updateDomainName',
            'updateFunction',
            'updateGraphqlApi',
            'updateResolver',
            'updateSourceApiAssociation',
            'updateType',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateApi' => $this->associateApi(),
            'associateMergedGraphqlApi' => $this->associateMergedGraphqlApi(),
            'associateSourceGraphqlApi' => $this->associateSourceGraphqlApi(),
            'createApi' => $this->createApi(),
            'createApiCache' => $this->createApiCache(),
            'createApiKey' => $this->createApiKey(),
            'createChannelNamespace' => $this->createChannelNamespace(),
            'createDataSource' => $this->createDataSource(),
            'createDomainName' => $this->createDomainName(),
            'createFunction' => $this->createFunction(),
            'createGraphqlApi' => $this->createGraphqlApi(),
            'createResolver' => $this->createResolver(),
            'createType' => $this->createType(),
            'deleteApi' => $this->deleteApi(),
            'deleteApiCache' => $this->deleteApiCache(),
            'deleteApiKey' => $this->deleteApiKey(),
            'deleteChannelNamespace' => $this->deleteChannelNamespace(),
            'deleteDataSource' => $this->deleteDataSource(),
            'deleteDomainName' => $this->deleteDomainName(),
            'deleteFunction' => $this->deleteFunction(),
            'deleteGraphqlApi' => $this->deleteGraphqlApi(),
            'deleteResolver' => $this->deleteResolver(),
            'deleteType' => $this->deleteType(),
            'disassociateApi' => $this->disassociateApi(),
            'disassociateMergedGraphqlApi' => $this->disassociateMergedGraphqlApi(),
            'disassociateSourceGraphqlApi' => $this->disassociateSourceGraphqlApi(),
            'evaluateCode' => $this->evaluateCode(),
            'evaluateMappingTemplate' => $this->evaluateMappingTemplate(),
            'flushApiCache' => $this->flushApiCache(),
            'getApi' => $this->getApi(),
            'getApiAssociation' => $this->getApiAssociation(),
            'getApiCache' => $this->getApiCache(),
            'getChannelNamespace' => $this->getChannelNamespace(),
            'getDataSource' => $this->getDataSource(),
            'getDataSourceIntrospection' => $this->getDataSourceIntrospection(),
            'getDomainName' => $this->getDomainName(),
            'getFunction' => $this->getFunction(),
            'getGraphqlApi' => $this->getGraphqlApi(),
            'getGraphqlApiEnvironmentVariables' => $this->getGraphqlApiEnvironmentVariables(),
            'getIntrospectionSchema' => $this->getIntrospectionSchema(),
            'getResolver' => $this->getResolver(),
            'getSchemaCreationStatus' => $this->getSchemaCreationStatus(),
            'getSourceApiAssociation' => $this->getSourceApiAssociation(),
            'getType' => $this->getType(),
            'listApiKeys' => $this->listApiKeys(),
            'listApis' => $this->listApis(),
            'listChannelNamespaces' => $this->listChannelNamespaces(),
            'listDataSources' => $this->listDataSources(),
            'listDomainNames' => $this->listDomainNames(),
            'listFunctions' => $this->listFunctions(),
            'listGraphqlApis' => $this->listGraphqlApis(),
            'listResolvers' => $this->listResolvers(),
            'listResolversByFunction' => $this->listResolversByFunction(),
            'listSourceApiAssociations' => $this->listSourceApiAssociations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTypes' => $this->listTypes(),
            'listTypesByAssociation' => $this->listTypesByAssociation(),
            'putGraphqlApiEnvironmentVariables' => $this->putGraphqlApiEnvironmentVariables(),
            'startDataSourceIntrospection' => $this->startDataSourceIntrospection(),
            'startSchemaCreation' => $this->startSchemaCreation(),
            'startSchemaMerge' => $this->startSchemaMerge(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApi' => $this->updateApi(),
            'updateApiCache' => $this->updateApiCache(),
            'updateApiKey' => $this->updateApiKey(),
            'updateChannelNamespace' => $this->updateChannelNamespace(),
            'updateDataSource' => $this->updateDataSource(),
            'updateDomainName' => $this->updateDomainName(),
            'updateFunction' => $this->updateFunction(),
            'updateGraphqlApi' => $this->updateGraphqlApi(),
            'updateResolver' => $this->updateResolver(),
            'updateSourceApiAssociation' => $this->updateSourceApiAssociation(),
            'updateType' => $this->updateType(),
        };
    }
    private function associateApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentDetail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function associateMergedGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatusDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulMergeDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mergeType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function associateSourceGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatusDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulMergeDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mergeType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('api'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authProviders'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultPublishAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultSubscribeAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                                new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createApiCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiCache'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiCachingBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('atRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthMetricsConfig'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_CACHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_CACHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_LEVEL_CACHING'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('T2_SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('T2_MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_2XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_4XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_8XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_2X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_4X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_8X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_12X'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('expires'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function createChannelNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('channelNamespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribeAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHandlers'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dynamodbConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('elasticsearchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchServiceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventBridgeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_ELASTICSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RELATIONAL_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_EVENTBRIDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_BEDROCK_RUNTIME'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('useCallerCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('deltaSyncConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('versioned'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseTableTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableTTL'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsIamConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('signingRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('signingServiceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsHttpEndpointConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RDS_HTTP_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('dbClusterIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schema'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsSecretStoreArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventBusArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainNameConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appsyncDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('functionConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('functionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphqlApi'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('uris'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalAuthenticationProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('introspectionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryDepthLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverCountLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedMetricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fieldLogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeVerboseContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                            new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GLOBAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resolverLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationLevelMetricsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_RESOLVER_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_DATA_SOURCE_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_DATA_SOURCE_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createResolver(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolver'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('kind'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIPELINE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                        new \PHPStan\Type\Constant\ConstantStringType('cachingKeys'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApiCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteChannelNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteResolver(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateMergedGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                ]),
            ]),
        ]);
    }
    private function disassociateSourceGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                ]),
            ]),
        ]);
    }
    private function evaluateCode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evaluationResult'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('logs'),
                new \PHPStan\Type\Constant\ConstantStringType('stash'),
                new \PHPStan\Type\Constant\ConstantStringType('outErrors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('line'),
                            new \PHPStan\Type\Constant\ConstantStringType('column'),
                            new \PHPStan\Type\Constant\ConstantStringType('span'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function evaluateMappingTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('evaluationResult'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('logs'),
                new \PHPStan\Type\Constant\ConstantStringType('stash'),
                new \PHPStan\Type\Constant\ConstantStringType('outErrors'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function flushApiCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('api'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authProviders'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultPublishAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultSubscribeAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                                new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getApiAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentDetail'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getApiCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiCache'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiCachingBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('atRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthMetricsConfig'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_CACHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_CACHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_LEVEL_CACHING'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('T2_SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('T2_MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_2XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_4XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_8XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_2X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_4X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_8X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_12X'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getChannelNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('channelNamespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribeAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHandlers'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dynamodbConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('elasticsearchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchServiceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventBridgeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_ELASTICSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RELATIONAL_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_EVENTBRIDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_BEDROCK_RUNTIME'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('useCallerCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('deltaSyncConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('versioned'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseTableTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableTTL'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsIamConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('signingRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('signingServiceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsHttpEndpointConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RDS_HTTP_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('dbClusterIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schema'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsSecretStoreArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventBusArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getDataSourceIntrospection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('introspectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('introspectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('introspectionStatusDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('introspectionResult'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('models'),
                    new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('fields'),
                        new \PHPStan\Type\Constant\ConstantStringType('primaryKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('indexes'),
                        new \PHPStan\Type\Constant\ConstantStringType('sdl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('length'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('kind'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('type'),
                                new \PHPStan\Type\Constant\ConstantStringType('values'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\MixedType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('fields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('fields'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainNameConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appsyncDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('functionConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('functionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphqlApi'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('uris'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalAuthenticationProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('introspectionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryDepthLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverCountLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedMetricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fieldLogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeVerboseContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                            new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GLOBAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resolverLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationLevelMetricsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_RESOLVER_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_DATA_SOURCE_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_DATA_SOURCE_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getGraphqlApiEnvironmentVariables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getIntrospectionSchema(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('schema'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getResolver(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolver'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('kind'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIPELINE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                        new \PHPStan\Type\Constant\ConstantStringType('cachingKeys'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSchemaCreationStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('details'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSourceApiAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatusDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulMergeDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mergeType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listApiKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiKeys'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('expires'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listApis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apis'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authProviders'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultPublishAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultSubscribeAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                                new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChannelNamespaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('channelNamespaces'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribeAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHandlers'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dynamodbConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('elasticsearchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchServiceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventBridgeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_ELASTICSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RELATIONAL_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_EVENTBRIDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_BEDROCK_RUNTIME'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('useCallerCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('deltaSyncConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('versioned'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseTableTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableTTL'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsIamConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('signingRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('signingServiceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsHttpEndpointConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RDS_HTTP_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('dbClusterIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schema'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsSecretStoreArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventBusArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainNameConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appsyncDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
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
    private function listFunctions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('functions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('functionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGraphqlApis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphqlApis'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('uris'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalAuthenticationProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('introspectionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryDepthLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverCountLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedMetricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fieldLogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeVerboseContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                            new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GLOBAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resolverLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationLevelMetricsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_RESOLVER_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_DATA_SOURCE_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_DATA_SOURCE_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResolvers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolvers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('kind'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIPELINE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                        new \PHPStan\Type\Constant\ConstantStringType('cachingKeys'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResolversByFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolvers'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('kind'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIPELINE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                        new \PHPStan\Type\Constant\ConstantStringType('cachingKeys'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSourceApiAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                ], [
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
    private function listTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('types'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTypesByAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('types'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putGraphqlApiEnvironmentVariables(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function startDataSourceIntrospection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('introspectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('introspectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('introspectionStatusDetail'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startSchemaCreation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                ]),
            ]),
        ]);
    }
    private function startSchemaMerge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                ]),
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
    private function updateApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('api'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authProviders'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultPublishAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultSubscribeAuthModes'),
                        new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                            new \PHPStan\Type\Constant\ConstantStringType('cognitoConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                                new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                                new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                                new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                                new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                                new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authType'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                                new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('logLevel'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateApiCache(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiCache'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiCachingBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('transitEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('atRestEncryptionEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthMetricsConfig'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_CACHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_CACHING'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATION_LEVEL_CACHING'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('T2_SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('T2_MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_2XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_4XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('R4_8XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SMALL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('XLARGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_2X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_4X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_8X'),
                        new \PHPStan\Type\Constant\ConstantStringType('LARGE_12X'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apiKey'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('expires'),
                    new \PHPStan\Type\Constant\ConstantStringType('deletes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function updateChannelNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('channelNamespace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('subscribeAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('publishAuthModes'),
                    new \PHPStan\Type\Constant\ConstantStringType('codeHandlers'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('channelNamespaceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateDataSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataSource'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dynamodbConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('elasticsearchConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openSearchServiceConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('httpConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('eventBridgeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_DYNAMODB'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_ELASTICSEARCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                        new \PHPStan\Type\Constant\ConstantStringType('RELATIONAL_DATABASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_EVENTBRIDGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_BEDROCK_RUNTIME'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('tableName'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('useCallerCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('deltaSyncConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('versioned'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseTableTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableName'),
                            new \PHPStan\Type\Constant\ConstantStringType('deltaSyncTableTTL'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaFunctionArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizationConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizationType'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsIamConfig'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('signingRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('signingServiceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('relationalDatabaseSourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('rdsHttpEndpointConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RDS_HTTP_ENDPOINT'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('dbClusterIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('databaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('schema'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsSecretStoreArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('eventBusArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateDomainName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainNameConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('appsyncDomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('hostedZoneId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('functionConfiguration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('functionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('functionVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateGraphqlApi(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('graphqlApi'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                    new \PHPStan\Type\Constant\ConstantStringType('logConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('uris'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalAuthenticationProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('xrayEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafWebAclArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('dns'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibility'),
                    new \PHPStan\Type\Constant\ConstantStringType('apiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerContact'),
                    new \PHPStan\Type\Constant\ConstantStringType('introspectionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('queryDepthLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverCountLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedMetricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('fieldLogLevel'),
                        new \PHPStan\Type\Constant\ConstantStringType('cloudWatchLogsRoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('excludeVerboseContent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            new \PHPStan\Type\Constant\ConstantStringType('INFO'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEBUG'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ALLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('openIDConnectConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('userPoolConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaAuthorizerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API_KEY'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_IAM'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMAZON_COGNITO_USER_POOLS'),
                            new \PHPStan\Type\Constant\ConstantStringType('OPENID_CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_LAMBDA'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                            new \PHPStan\Type\Constant\ConstantStringType('iatTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('authTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('userPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('awsRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('appIdClientRegex'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                            new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerResultTtlInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('authorizerUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityValidationExpression'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GLOBAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resolverLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataSourceLevelMetricsBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationLevelMetricsConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_RESOLVER_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_RESOLVER_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FULL_REQUEST_DATA_SOURCE_METRICS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PER_DATA_SOURCE_METRICS'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateResolver(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolver'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('typeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fieldName'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSourceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolverArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('responseMappingTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('kind'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('syncConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('cachingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('maxBatchSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PIPELINE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('functions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('conflictHandler'),
                        new \PHPStan\Type\Constant\ConstantStringType('conflictDetection'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerConfig'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('OPTIMISTIC_CONCURRENCY'),
                            new \PHPStan\Type\Constant\ConstantStringType('LAMBDA'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTOMERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('VERSION'),
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lambdaConflictHandlerArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                        new \PHPStan\Type\Constant\ConstantStringType('cachingKeys'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtimeVersion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('APPSYNC_JS'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateSourceApiAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('mergedApiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceApiAssociationStatusDetail'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulMergeDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('mergeType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL_MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('MERGE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO_MERGE_SCHEDULE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('type'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('format'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SDL'),
                        new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    ]),
                ]),
            ]),
        ]);
    }
}