<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudFrontClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudFront\CloudFrontClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudFront\CloudFrontClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAlias',
            'copyDistribution',
            'createAnycastIpList',
            'createCachePolicy',
            'createCloudFrontOriginAccessIdentity',
            'createContinuousDeploymentPolicy',
            'createDistribution',
            'createDistributionWithTags',
            'createFieldLevelEncryptionConfig',
            'createFieldLevelEncryptionProfile',
            'createFunction',
            'createInvalidation',
            'createKeyGroup',
            'createKeyValueStore',
            'createMonitoringSubscription',
            'createOriginAccessControl',
            'createOriginRequestPolicy',
            'createPublicKey',
            'createRealtimeLogConfig',
            'createResponseHeadersPolicy',
            'createStreamingDistribution',
            'createStreamingDistributionWithTags',
            'createVpcOrigin',
            'deleteAnycastIpList',
            'deleteCachePolicy',
            'deleteCloudFrontOriginAccessIdentity',
            'deleteContinuousDeploymentPolicy',
            'deleteDistribution',
            'deleteFieldLevelEncryptionConfig',
            'deleteFieldLevelEncryptionProfile',
            'deleteFunction',
            'deleteKeyGroup',
            'deleteKeyValueStore',
            'deleteMonitoringSubscription',
            'deleteOriginAccessControl',
            'deleteOriginRequestPolicy',
            'deletePublicKey',
            'deleteRealtimeLogConfig',
            'deleteResponseHeadersPolicy',
            'deleteStreamingDistribution',
            'deleteVpcOrigin',
            'describeFunction',
            'describeKeyValueStore',
            'getAnycastIpList',
            'getCachePolicy',
            'getCachePolicyConfig',
            'getCloudFrontOriginAccessIdentity',
            'getCloudFrontOriginAccessIdentityConfig',
            'getContinuousDeploymentPolicy',
            'getContinuousDeploymentPolicyConfig',
            'getDistribution',
            'getDistributionConfig',
            'getFieldLevelEncryption',
            'getFieldLevelEncryptionConfig',
            'getFieldLevelEncryptionProfile',
            'getFieldLevelEncryptionProfileConfig',
            'getFunction',
            'getInvalidation',
            'getKeyGroup',
            'getKeyGroupConfig',
            'getMonitoringSubscription',
            'getOriginAccessControl',
            'getOriginAccessControlConfig',
            'getOriginRequestPolicy',
            'getOriginRequestPolicyConfig',
            'getPublicKey',
            'getPublicKeyConfig',
            'getRealtimeLogConfig',
            'getResponseHeadersPolicy',
            'getResponseHeadersPolicyConfig',
            'getStreamingDistribution',
            'getStreamingDistributionConfig',
            'getVpcOrigin',
            'listAnycastIpLists',
            'listCachePolicies',
            'listCloudFrontOriginAccessIdentities',
            'listConflictingAliases',
            'listContinuousDeploymentPolicies',
            'listDistributions',
            'listDistributionsByAnycastIpListId',
            'listDistributionsByCachePolicyId',
            'listDistributionsByKeyGroup',
            'listDistributionsByOriginRequestPolicyId',
            'listDistributionsByRealtimeLogConfig',
            'listDistributionsByResponseHeadersPolicyId',
            'listDistributionsByVpcOriginId',
            'listDistributionsByWebACLId',
            'listFieldLevelEncryptionConfigs',
            'listFieldLevelEncryptionProfiles',
            'listFunctions',
            'listInvalidations',
            'listKeyGroups',
            'listKeyValueStores',
            'listOriginAccessControls',
            'listOriginRequestPolicies',
            'listPublicKeys',
            'listRealtimeLogConfigs',
            'listResponseHeadersPolicies',
            'listStreamingDistributions',
            'listTagsForResource',
            'listVpcOrigins',
            'publishFunction',
            'tagResource',
            'testFunction',
            'untagResource',
            'updateCachePolicy',
            'updateCloudFrontOriginAccessIdentity',
            'updateContinuousDeploymentPolicy',
            'updateDistribution',
            'updateDistributionWithStagingConfig',
            'updateFieldLevelEncryptionConfig',
            'updateFieldLevelEncryptionProfile',
            'updateFunction',
            'updateKeyGroup',
            'updateKeyValueStore',
            'updateOriginAccessControl',
            'updateOriginRequestPolicy',
            'updatePublicKey',
            'updateRealtimeLogConfig',
            'updateResponseHeadersPolicy',
            'updateStreamingDistribution',
            'updateVpcOrigin',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAlias' => $this->associateAlias(),
            'copyDistribution' => $this->copyDistribution(),
            'createAnycastIpList' => $this->createAnycastIpList(),
            'createCachePolicy' => $this->createCachePolicy(),
            'createCloudFrontOriginAccessIdentity' => $this->createCloudFrontOriginAccessIdentity(),
            'createContinuousDeploymentPolicy' => $this->createContinuousDeploymentPolicy(),
            'createDistribution' => $this->createDistribution(),
            'createDistributionWithTags' => $this->createDistributionWithTags(),
            'createFieldLevelEncryptionConfig' => $this->createFieldLevelEncryptionConfig(),
            'createFieldLevelEncryptionProfile' => $this->createFieldLevelEncryptionProfile(),
            'createFunction' => $this->createFunction(),
            'createInvalidation' => $this->createInvalidation(),
            'createKeyGroup' => $this->createKeyGroup(),
            'createKeyValueStore' => $this->createKeyValueStore(),
            'createMonitoringSubscription' => $this->createMonitoringSubscription(),
            'createOriginAccessControl' => $this->createOriginAccessControl(),
            'createOriginRequestPolicy' => $this->createOriginRequestPolicy(),
            'createPublicKey' => $this->createPublicKey(),
            'createRealtimeLogConfig' => $this->createRealtimeLogConfig(),
            'createResponseHeadersPolicy' => $this->createResponseHeadersPolicy(),
            'createStreamingDistribution' => $this->createStreamingDistribution(),
            'createStreamingDistributionWithTags' => $this->createStreamingDistributionWithTags(),
            'createVpcOrigin' => $this->createVpcOrigin(),
            'deleteAnycastIpList' => $this->deleteAnycastIpList(),
            'deleteCachePolicy' => $this->deleteCachePolicy(),
            'deleteCloudFrontOriginAccessIdentity' => $this->deleteCloudFrontOriginAccessIdentity(),
            'deleteContinuousDeploymentPolicy' => $this->deleteContinuousDeploymentPolicy(),
            'deleteDistribution' => $this->deleteDistribution(),
            'deleteFieldLevelEncryptionConfig' => $this->deleteFieldLevelEncryptionConfig(),
            'deleteFieldLevelEncryptionProfile' => $this->deleteFieldLevelEncryptionProfile(),
            'deleteFunction' => $this->deleteFunction(),
            'deleteKeyGroup' => $this->deleteKeyGroup(),
            'deleteKeyValueStore' => $this->deleteKeyValueStore(),
            'deleteMonitoringSubscription' => $this->deleteMonitoringSubscription(),
            'deleteOriginAccessControl' => $this->deleteOriginAccessControl(),
            'deleteOriginRequestPolicy' => $this->deleteOriginRequestPolicy(),
            'deletePublicKey' => $this->deletePublicKey(),
            'deleteRealtimeLogConfig' => $this->deleteRealtimeLogConfig(),
            'deleteResponseHeadersPolicy' => $this->deleteResponseHeadersPolicy(),
            'deleteStreamingDistribution' => $this->deleteStreamingDistribution(),
            'deleteVpcOrigin' => $this->deleteVpcOrigin(),
            'describeFunction' => $this->describeFunction(),
            'describeKeyValueStore' => $this->describeKeyValueStore(),
            'getAnycastIpList' => $this->getAnycastIpList(),
            'getCachePolicy' => $this->getCachePolicy(),
            'getCachePolicyConfig' => $this->getCachePolicyConfig(),
            'getCloudFrontOriginAccessIdentity' => $this->getCloudFrontOriginAccessIdentity(),
            'getCloudFrontOriginAccessIdentityConfig' => $this->getCloudFrontOriginAccessIdentityConfig(),
            'getContinuousDeploymentPolicy' => $this->getContinuousDeploymentPolicy(),
            'getContinuousDeploymentPolicyConfig' => $this->getContinuousDeploymentPolicyConfig(),
            'getDistribution' => $this->getDistribution(),
            'getDistributionConfig' => $this->getDistributionConfig(),
            'getFieldLevelEncryption' => $this->getFieldLevelEncryption(),
            'getFieldLevelEncryptionConfig' => $this->getFieldLevelEncryptionConfig(),
            'getFieldLevelEncryptionProfile' => $this->getFieldLevelEncryptionProfile(),
            'getFieldLevelEncryptionProfileConfig' => $this->getFieldLevelEncryptionProfileConfig(),
            'getFunction' => $this->getFunction(),
            'getInvalidation' => $this->getInvalidation(),
            'getKeyGroup' => $this->getKeyGroup(),
            'getKeyGroupConfig' => $this->getKeyGroupConfig(),
            'getMonitoringSubscription' => $this->getMonitoringSubscription(),
            'getOriginAccessControl' => $this->getOriginAccessControl(),
            'getOriginAccessControlConfig' => $this->getOriginAccessControlConfig(),
            'getOriginRequestPolicy' => $this->getOriginRequestPolicy(),
            'getOriginRequestPolicyConfig' => $this->getOriginRequestPolicyConfig(),
            'getPublicKey' => $this->getPublicKey(),
            'getPublicKeyConfig' => $this->getPublicKeyConfig(),
            'getRealtimeLogConfig' => $this->getRealtimeLogConfig(),
            'getResponseHeadersPolicy' => $this->getResponseHeadersPolicy(),
            'getResponseHeadersPolicyConfig' => $this->getResponseHeadersPolicyConfig(),
            'getStreamingDistribution' => $this->getStreamingDistribution(),
            'getStreamingDistributionConfig' => $this->getStreamingDistributionConfig(),
            'getVpcOrigin' => $this->getVpcOrigin(),
            'listAnycastIpLists' => $this->listAnycastIpLists(),
            'listCachePolicies' => $this->listCachePolicies(),
            'listCloudFrontOriginAccessIdentities' => $this->listCloudFrontOriginAccessIdentities(),
            'listConflictingAliases' => $this->listConflictingAliases(),
            'listContinuousDeploymentPolicies' => $this->listContinuousDeploymentPolicies(),
            'listDistributions' => $this->listDistributions(),
            'listDistributionsByAnycastIpListId' => $this->listDistributionsByAnycastIpListId(),
            'listDistributionsByCachePolicyId' => $this->listDistributionsByCachePolicyId(),
            'listDistributionsByKeyGroup' => $this->listDistributionsByKeyGroup(),
            'listDistributionsByOriginRequestPolicyId' => $this->listDistributionsByOriginRequestPolicyId(),
            'listDistributionsByRealtimeLogConfig' => $this->listDistributionsByRealtimeLogConfig(),
            'listDistributionsByResponseHeadersPolicyId' => $this->listDistributionsByResponseHeadersPolicyId(),
            'listDistributionsByVpcOriginId' => $this->listDistributionsByVpcOriginId(),
            'listDistributionsByWebACLId' => $this->listDistributionsByWebACLId(),
            'listFieldLevelEncryptionConfigs' => $this->listFieldLevelEncryptionConfigs(),
            'listFieldLevelEncryptionProfiles' => $this->listFieldLevelEncryptionProfiles(),
            'listFunctions' => $this->listFunctions(),
            'listInvalidations' => $this->listInvalidations(),
            'listKeyGroups' => $this->listKeyGroups(),
            'listKeyValueStores' => $this->listKeyValueStores(),
            'listOriginAccessControls' => $this->listOriginAccessControls(),
            'listOriginRequestPolicies' => $this->listOriginRequestPolicies(),
            'listPublicKeys' => $this->listPublicKeys(),
            'listRealtimeLogConfigs' => $this->listRealtimeLogConfigs(),
            'listResponseHeadersPolicies' => $this->listResponseHeadersPolicies(),
            'listStreamingDistributions' => $this->listStreamingDistributions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVpcOrigins' => $this->listVpcOrigins(),
            'publishFunction' => $this->publishFunction(),
            'tagResource' => $this->tagResource(),
            'testFunction' => $this->testFunction(),
            'untagResource' => $this->untagResource(),
            'updateCachePolicy' => $this->updateCachePolicy(),
            'updateCloudFrontOriginAccessIdentity' => $this->updateCloudFrontOriginAccessIdentity(),
            'updateContinuousDeploymentPolicy' => $this->updateContinuousDeploymentPolicy(),
            'updateDistribution' => $this->updateDistribution(),
            'updateDistributionWithStagingConfig' => $this->updateDistributionWithStagingConfig(),
            'updateFieldLevelEncryptionConfig' => $this->updateFieldLevelEncryptionConfig(),
            'updateFieldLevelEncryptionProfile' => $this->updateFieldLevelEncryptionProfile(),
            'updateFunction' => $this->updateFunction(),
            'updateKeyGroup' => $this->updateKeyGroup(),
            'updateKeyValueStore' => $this->updateKeyValueStore(),
            'updateOriginAccessControl' => $this->updateOriginAccessControl(),
            'updateOriginRequestPolicy' => $this->updateOriginRequestPolicy(),
            'updatePublicKey' => $this->updatePublicKey(),
            'updateRealtimeLogConfig' => $this->updateRealtimeLogConfig(),
            'updateResponseHeadersPolicy' => $this->updateResponseHeadersPolicy(),
            'updateStreamingDistribution' => $this->updateStreamingDistribution(),
            'updateVpcOrigin' => $this->updateVpcOrigin(),
        };
    }
    private function associateAlias(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function copyDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgressInvalidationBatches'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedKeyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createAnycastIpList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnycastIpList'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnycastIps'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCachePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CachePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CachePolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParametersInCacheKeyAndForwardedToOrigin'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingGzip'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingBrotli'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createCloudFrontOriginAccessIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3CanonicalUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentityConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContinuousDeploymentPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StagingDistributionDnsNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SingleWeightConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('SingleHeaderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionStickinessConfig'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IdleTTL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumTTL'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SingleWeight'),
                                new \PHPStan\Type\Constant\ConstantStringType('SingleHeader'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgressInvalidationBatches'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedKeyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDistributionWithTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgressInvalidationBatches'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedKeyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFieldLevelEncryptionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfileConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfileConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenQueryArgProfileIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryArg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenContentTypeIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('URLEncoded'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFieldLevelEncryptionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfile'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfileConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionEntities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProviderId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldPatterns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreAssociations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-1.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-2.0'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createInvalidation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('Invalidation'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidationBatch'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Paths'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createKeyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyGroupConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKeyValueStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStore'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMonitoringSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitoringSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RealtimeMetricsSubscriptionConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RealtimeMetricsSubscriptionStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createOriginAccessControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControl'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlOriginType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('never'),
                            new \PHPStan\Type\Constant\ConstantStringType('always'),
                            new \PHPStan\Type\Constant\ConstantStringType('no-override'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediastore'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediapackagev2'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createOriginRequestPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('allViewer'),
                                new \PHPStan\Type\Constant\ConstantStringType('allViewerAndWhitelistCloudFront'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicKeyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodedKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createRealtimeLogConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createResponseHeadersPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CorsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerTimingHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoveHeadersConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowOrigins'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlExposeHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginOverride'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('XSSProtection'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrameOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('StrictTransportSecurity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('Protection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ModeBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReportUri'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('FrameOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAMEORIGIN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('no-referrer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('no-referrer-when-downgrade'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-when-cross-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('same-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strict-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strict-origin-when-cross-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unsafe-url'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSubdomains'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preload'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStreamingDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingDistribution'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingDistributionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStreamingDistributionWithTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingDistribution'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingDistributionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createVpcOrigin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcOrigin'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginEndpointConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                            new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteAnycastIpList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCachePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCloudFrontOriginAccessIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteContinuousDeploymentPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFieldLevelEncryptionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFieldLevelEncryptionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteKeyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteKeyValueStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteMonitoringSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteOriginAccessControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteOriginRequestPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deletePublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteRealtimeLogConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteResponseHeadersPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStreamingDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteVpcOrigin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcOrigin'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginEndpointConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                            new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreAssociations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-1.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-2.0'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeKeyValueStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStore'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAnycastIpList(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnycastIpList'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnycastIps'),
                    new \PHPStan\Type\Constant\ConstantStringType('IpCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCachePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CachePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CachePolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParametersInCacheKeyAndForwardedToOrigin'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingGzip'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingBrotli'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCachePolicyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                    new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParametersInCacheKeyAndForwardedToOrigin'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingGzip'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingBrotli'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCloudFrontOriginAccessIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3CanonicalUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentityConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCloudFrontOriginAccessIdentityConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentityConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getContinuousDeploymentPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StagingDistributionDnsNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SingleWeightConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('SingleHeaderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionStickinessConfig'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IdleTTL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumTTL'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SingleWeight'),
                                new \PHPStan\Type\Constant\ConstantStringType('SingleHeader'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getContinuousDeploymentPolicyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StagingDistributionDnsNames'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SingleWeightConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SingleHeaderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionStickinessConfig'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('IdleTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaximumTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Header'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SingleWeight'),
                            new \PHPStan\Type\Constant\ConstantStringType('SingleHeader'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgressInvalidationBatches'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedKeyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDistributionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                    new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                    new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                    new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                    ])),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                            new \PHPStan\Type\Constant\ConstantStringType('Members'),
                            new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                                new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                        new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                        new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                            new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                    new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                    new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('vip'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                            new \PHPStan\Type\Constant\ConstantStringType('iam'),
                            new \PHPStan\Type\Constant\ConstantStringType('acm'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2'),
                        new \PHPStan\Type\Constant\ConstantStringType('http3'),
                        new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFieldLevelEncryption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfileConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfileConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenQueryArgProfileIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryArg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenContentTypeIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('URLEncoded'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFieldLevelEncryptionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfileConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfileConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenQueryArgProfileIsUnknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfiles'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryArg'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenContentTypeIsUnknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfiles'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('URLEncoded'),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFieldLevelEncryptionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfile'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfileConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionEntities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProviderId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldPatterns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFieldLevelEncryptionProfileConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfileConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionEntities'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PublicKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProviderId'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldPatterns'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionCode'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInvalidation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Invalidation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InvalidationBatch'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Paths'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getKeyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyGroupConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getKeyGroupConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyGroupConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMonitoringSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitoringSubscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RealtimeMetricsSubscriptionConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RealtimeMetricsSubscriptionStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getOriginAccessControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControl'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlOriginType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('never'),
                            new \PHPStan\Type\Constant\ConstantStringType('always'),
                            new \PHPStan\Type\Constant\ConstantStringType('no-override'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediastore'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediapackagev2'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getOriginAccessControlConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningProtocol'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningBehavior'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlOriginType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('never'),
                        new \PHPStan\Type\Constant\ConstantStringType('always'),
                        new \PHPStan\Type\Constant\ConstantStringType('no-override'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3'),
                        new \PHPStan\Type\Constant\ConstantStringType('mediastore'),
                        new \PHPStan\Type\Constant\ConstantStringType('mediapackagev2'),
                        new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getOriginRequestPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('allViewer'),
                                new \PHPStan\Type\Constant\ConstantStringType('allViewerAndWhitelistCloudFront'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getOriginRequestPolicyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                            new \PHPStan\Type\Constant\ConstantStringType('allViewer'),
                            new \PHPStan\Type\Constant\ConstantStringType('allViewerAndWhitelistCloudFront'),
                            new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                            new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                            new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicKeyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodedKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPublicKeyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncodedKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRealtimeLogConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getResponseHeadersPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CorsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerTimingHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoveHeadersConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowOrigins'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlExposeHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginOverride'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('XSSProtection'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrameOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('StrictTransportSecurity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('Protection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ModeBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReportUri'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('FrameOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAMEORIGIN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('no-referrer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('no-referrer-when-downgrade'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-when-cross-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('same-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strict-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strict-origin-when-cross-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unsafe-url'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSubdomains'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preload'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResponseHeadersPolicyConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CorsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityHeadersConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerTimingHeadersConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomHeadersConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('RemoveHeadersConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowOrigins'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowHeaders'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowMethods'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlExposeHeaders'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginOverride'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                            ])),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('XSSProtection'),
                        new \PHPStan\Type\Constant\ConstantStringType('FrameOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTypeOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('StrictTransportSecurity'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protection'),
                            new \PHPStan\Type\Constant\ConstantStringType('ModeBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReportUri'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrameOption'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                new \PHPStan\Type\Constant\ConstantStringType('SAMEORIGIN'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('no-referrer'),
                                new \PHPStan\Type\Constant\ConstantStringType('no-referrer-when-downgrade'),
                                new \PHPStan\Type\Constant\ConstantStringType('origin'),
                                new \PHPStan\Type\Constant\ConstantStringType('origin-when-cross-origin'),
                                new \PHPStan\Type\Constant\ConstantStringType('same-origin'),
                                new \PHPStan\Type\Constant\ConstantStringType('strict-origin'),
                                new \PHPStan\Type\Constant\ConstantStringType('strict-origin-when-cross-origin'),
                                new \PHPStan\Type\Constant\ConstantStringType('unsafe-url'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeSubdomains'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preload'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Header'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Override'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Header'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStreamingDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingDistribution'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingDistributionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStreamingDistributionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingDistributionConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Origin'),
                    new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getVpcOrigin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcOrigin'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginEndpointConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                            new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAnycastIpLists(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AnycastIpLists'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function listCachePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('CachePolicy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParametersInCacheKeyAndForwardedToOrigin'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingGzip'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingBrotli'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                                        new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listCloudFrontOriginAccessIdentities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentityList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3CanonicalUserId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listConflictingAliases(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConflictingAliasesList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('DistributionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listContinuousDeploymentPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicy'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StagingDistributionDnsNames'),
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrafficConfig'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SingleWeightConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SingleHeaderConfig'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SessionStickinessConfig'),
                                    ], [
                                        new \PHPStan\Type\FloatType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('IdleTTL'),
                                            new \PHPStan\Type\Constant\ConstantStringType('MaximumTTL'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SingleWeight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SingleHeader'),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listDistributions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByAnycastIpListId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByCachePolicyId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionIdList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByKeyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionIdList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByOriginRequestPolicyId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionIdList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByRealtimeLogConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByResponseHeadersPolicyId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionIdList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByVpcOriginId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionIdList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function listDistributionsByWebACLId(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DistributionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            ]),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listFieldLevelEncryptionConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfileConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfileConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenQueryArgProfileIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryArg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenContentTypeIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('URLEncoded'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listFieldLevelEncryptionProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfileList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionEntities'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProviderId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldPatterns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listFunctions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreAssociations'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-1.0'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-2.0'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listInvalidations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InvalidationList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listKeyGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyGroupList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('KeyGroup'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listKeyValueStores(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listOriginAccessControls(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlOriginType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('never'),
                            new \PHPStan\Type\Constant\ConstantStringType('always'),
                            new \PHPStan\Type\Constant\ConstantStringType('no-override'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediastore'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediapackagev2'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listOriginRequestPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('allViewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('allViewerAndWhitelistCloudFront'),
                                        new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listPublicKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodedKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listRealtimeLogConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigs'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StreamType'),
                            new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                                new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listResponseHeadersPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicy'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('managed'),
                            new \PHPStan\Type\Constant\ConstantStringType('custom'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyConfig'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('CorsConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('SecurityHeadersConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ServerTimingHeadersConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeadersConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('RemoveHeadersConfig'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowOrigins'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowHeaders'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowMethods'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowCredentials'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessControlExposeHeaders'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginOverride'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('XSSProtection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FrameOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentTypeOptions'),
                                    new \PHPStan\Type\Constant\ConstantStringType('StrictTransportSecurity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Protection'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ModeBlock'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReportUri'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FrameOption'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                            new \PHPStan\Type\Constant\ConstantStringType('SAMEORIGIN'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('no-referrer'),
                                            new \PHPStan\Type\Constant\ConstantStringType('no-referrer-when-downgrade'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-when-cross-origin'),
                                            new \PHPStan\Type\Constant\ConstantStringType('same-origin'),
                                            new \PHPStan\Type\Constant\ConstantStringType('strict-origin'),
                                            new \PHPStan\Type\Constant\ConstantStringType('strict-origin-when-cross-origin'),
                                            new \PHPStan\Type\Constant\ConstantStringType('unsafe-url'),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeSubdomains'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Preload'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listStreamingDistributions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingDistributionList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
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
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listVpcOrigins(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginList'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                    new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginEndpointArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function publishFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreAssociations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-1.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-2.0'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function tagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function testFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TestResult'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('ComputeUtilization'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionExecutionLogs'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionOutput'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionMetadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreAssociations'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-1.0'),
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-2.0'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreARN'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                                new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateCachePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CachePolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('CachePolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParametersInCacheKeyAndForwardedToOrigin'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingGzip'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableAcceptEncodingBrotli'),
                            new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                                    new \PHPStan\Type\Constant\ConstantStringType('all'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateCloudFrontOriginAccessIdentity(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentity'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3CanonicalUserId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudFrontOriginAccessIdentityConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateContinuousDeploymentPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StagingDistributionDnsNames'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SingleWeightConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('SingleHeaderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionStickinessConfig'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('IdleTTL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MaximumTTL'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SingleWeight'),
                                new \PHPStan\Type\Constant\ConstantStringType('SingleHeader'),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgressInvalidationBatches'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedKeyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateDistributionWithStagingConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Distribution'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InProgressInvalidationBatches'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedKeyGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistributionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('AliasICPRecordals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('KeyGroupId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultRootObject'),
                        new \PHPStan\Type\Constant\ConstantStringType('Origins'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefaultCacheBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('CacheBehaviors'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomErrorResponses'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ViewerCertificate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('WebACLId'),
                        new \PHPStan\Type\Constant\ConstantStringType('HttpVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('IsIPV6Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinuousDeploymentPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Staging'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnycastIpListId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginPath'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomHeaders'),
                                new \PHPStan\Type\Constant\ConstantStringType('S3OriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('CustomOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcOriginConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAttempts'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionTimeout'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginShield'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderName'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HeaderValue'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                                        new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                                        new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                            new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginReadTimeout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginKeepaliveTimeout'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginShieldRegion'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('FailoverCriteria'),
                                new \PHPStan\Type\Constant\ConstantStringType('Members'),
                                new \PHPStan\Type\Constant\ConstantStringType('SelectionCriteria'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StatusCodes'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('OriginId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('default'),
                                    new \PHPStan\Type\Constant\ConstantStringType('media-quality-based'),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                            new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                            new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                            new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                ])),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                ]),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                        new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                    ]),
                                ])),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('none'),
                                        new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                        new \PHPStan\Type\Constant\ConstantStringType('all'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PathPattern'),
                                new \PHPStan\Type\Constant\ConstantStringType('TargetOriginId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                                new \PHPStan\Type\Constant\ConstantStringType('TrustedKeyGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('ViewerProtocolPolicy'),
                                new \PHPStan\Type\Constant\ConstantStringType('AllowedMethods'),
                                new \PHPStan\Type\Constant\ConstantStringType('SmoothStreaming'),
                                new \PHPStan\Type\Constant\ConstantStringType('Compress'),
                                new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionAssociations'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionId'),
                                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfigArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CachePolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('GrpcConfig'),
                                new \PHPStan\Type\Constant\ConstantStringType('ForwardedValues'),
                                new \PHPStan\Type\Constant\ConstantStringType('MinTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('DefaultTTL'),
                                new \PHPStan\Type\Constant\ConstantStringType('MaxTTL'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('allow-all'),
                                    new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                                    new \PHPStan\Type\Constant\ConstantStringType('redirect-to-https'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CachedMethods'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                        new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                        new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    ])),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                            new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                            new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                        ])),
                                    ]),
                                ]),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('LambdaFunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludeBody'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                    ])),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                                        new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('viewer-response'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-request'),
                                            new \PHPStan\Type\Constant\ConstantStringType('origin-response'),
                                        ]),
                                    ])),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryString'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryStringCacheKeys'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Forward'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistedNames'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('none'),
                                            new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponsePagePath'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('ErrorCachingMinTTL'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('IncludeCookies'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudFrontDefaultCertificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('IAMCertificateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACMCertificateArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSLSupportMethod'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumProtocolVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Certificate'),
                            new \PHPStan\Type\Constant\ConstantStringType('CertificateSource'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('sni-only'),
                                new \PHPStan\Type\Constant\ConstantStringType('vip'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-ip'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1_2016'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2018'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2019'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2_2021'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('cloudfront'),
                                new \PHPStan\Type\Constant\ConstantStringType('iam'),
                                new \PHPStan\Type\Constant\ConstantStringType('acm'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('GeoRestriction'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('RestrictionType'),
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('blacklist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                    new \PHPStan\Type\Constant\ConstantStringType('none'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http1.1'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2'),
                            new \PHPStan\Type\Constant\ConstantStringType('http3'),
                            new \PHPStan\Type\Constant\ConstantStringType('http2and3'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('ICPRecordalStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFieldLevelEncryptionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryption'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfileConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfileConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenQueryArgProfileIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryArgProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('QueryArg'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ForwardWhenContentTypeIsUnknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeProfiles'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Format'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ProfileId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('URLEncoded'),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFieldLevelEncryptionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfile'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('FieldLevelEncryptionProfileConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncryptionEntities'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('PublicKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('ProviderId'),
                                new \PHPStan\Type\Constant\ConstantStringType('FieldPatterns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Items'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFunction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FunctionSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('FunctionMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Runtime'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreAssociations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-1.0'),
                            new \PHPStan\Type\Constant\ConstantStringType('cloudfront-js-2.0'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStoreARN'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FunctionARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('Stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateKeyGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyGroup'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyGroupConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateKeyValueStore(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyValueStore'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateOriginAccessControl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControl'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningProtocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningBehavior'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginAccessControlOriginType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('sigv4'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('never'),
                            new \PHPStan\Type\Constant\ConstantStringType('always'),
                            new \PHPStan\Type\Constant\ConstantStringType('no-override'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediastore'),
                            new \PHPStan\Type\Constant\ConstantStringType('mediapackagev2'),
                            new \PHPStan\Type\Constant\ConstantStringType('lambda'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateOriginRequestPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginRequestPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('HeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CookiesConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryStringsConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HeaderBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Headers'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('allViewer'),
                                new \PHPStan\Type\Constant\ConstantStringType('allViewerAndWhitelistCloudFront'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CookieBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cookies'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStringBehavior'),
                            new \PHPStan\Type\Constant\ConstantStringType('QueryStrings'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('none'),
                                new \PHPStan\Type\Constant\ConstantStringType('whitelist'),
                                new \PHPStan\Type\Constant\ConstantStringType('all'),
                                new \PHPStan\Type\Constant\ConstantStringType('allExcept'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updatePublicKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicKeyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodedKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateRealtimeLogConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RealtimeLogConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StreamType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KinesisStreamConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamARN'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateResponseHeadersPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResponseHeadersPolicyConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CorsConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServerTimingHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomHeadersConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoveHeadersConfig'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowOrigins'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowMethods'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlAllowCredentials'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlExposeHeaders'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginOverride'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GET'),
                                    new \PHPStan\Type\Constant\ConstantStringType('POST'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OPTIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PATCH'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEAD'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ])),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('XSSProtection'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrameOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ContentTypeOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('StrictTransportSecurity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('Protection'),
                                new \PHPStan\Type\Constant\ConstantStringType('ModeBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReportUri'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('FrameOption'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('DENY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SAMEORIGIN'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('ReferrerPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('no-referrer'),
                                    new \PHPStan\Type\Constant\ConstantStringType('no-referrer-when-downgrade'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('origin-when-cross-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('same-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strict-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('strict-origin-when-cross-origin'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unsafe-url'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContentSecurityPolicy'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                                new \PHPStan\Type\Constant\ConstantStringType('IncludeSubdomains'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preload'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessControlMaxAgeSec'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SamplingRate'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Override'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Header'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStreamingDistribution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StreamingDistribution'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveTrustedSigners'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreamingDistributionConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                        new \PHPStan\Type\Constant\ConstantStringType('Items'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AwsAccountNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyPairIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                                new \PHPStan\Type\Constant\ConstantStringType('Items'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('S3Origin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Aliases'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrustedSigners'),
                        new \PHPStan\Type\Constant\ConstantStringType('PriceClass'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('OriginAccessIdentity'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_100'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_200'),
                            new \PHPStan\Type\Constant\ConstantStringType('PriceClass_All'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateVpcOrigin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcOrigin'),
                new \PHPStan\Type\Constant\ConstantStringType('ETag'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOriginEndpointConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPSPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginProtocolPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('OriginSslProtocols'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('http-only'),
                            new \PHPStan\Type\Constant\ConstantStringType('match-viewer'),
                            new \PHPStan\Type\Constant\ConstantStringType('https-only'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Quantity'),
                            new \PHPStan\Type\Constant\ConstantStringType('Items'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSLv3'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.1'),
                                new \PHPStan\Type\Constant\ConstantStringType('TLSv1.2'),
                            ])),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}