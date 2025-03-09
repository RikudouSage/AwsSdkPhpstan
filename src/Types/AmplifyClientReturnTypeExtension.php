<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AmplifyClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Amplify\AmplifyClient>
     */
    public function getClass(): string
    {
        return \Aws\Amplify\AmplifyClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createApp',
            'createBackendEnvironment',
            'createBranch',
            'createDeployment',
            'createDomainAssociation',
            'createWebhook',
            'deleteApp',
            'deleteBackendEnvironment',
            'deleteBranch',
            'deleteDomainAssociation',
            'deleteJob',
            'deleteWebhook',
            'generateAccessLogs',
            'getApp',
            'getArtifactUrl',
            'getBackendEnvironment',
            'getBranch',
            'getDomainAssociation',
            'getJob',
            'getWebhook',
            'listApps',
            'listArtifacts',
            'listBackendEnvironments',
            'listBranches',
            'listDomainAssociations',
            'listJobs',
            'listTagsForResource',
            'listWebhooks',
            'startDeployment',
            'startJob',
            'stopJob',
            'tagResource',
            'untagResource',
            'updateApp',
            'updateBranch',
            'updateDomainAssociation',
            'updateWebhook',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createApp' => $this->createApp(),
            'createBackendEnvironment' => $this->createBackendEnvironment(),
            'createBranch' => $this->createBranch(),
            'createDeployment' => $this->createDeployment(),
            'createDomainAssociation' => $this->createDomainAssociation(),
            'createWebhook' => $this->createWebhook(),
            'deleteApp' => $this->deleteApp(),
            'deleteBackendEnvironment' => $this->deleteBackendEnvironment(),
            'deleteBranch' => $this->deleteBranch(),
            'deleteDomainAssociation' => $this->deleteDomainAssociation(),
            'deleteJob' => $this->deleteJob(),
            'deleteWebhook' => $this->deleteWebhook(),
            'generateAccessLogs' => $this->generateAccessLogs(),
            'getApp' => $this->getApp(),
            'getArtifactUrl' => $this->getArtifactUrl(),
            'getBackendEnvironment' => $this->getBackendEnvironment(),
            'getBranch' => $this->getBranch(),
            'getDomainAssociation' => $this->getDomainAssociation(),
            'getJob' => $this->getJob(),
            'getWebhook' => $this->getWebhook(),
            'listApps' => $this->listApps(),
            'listArtifacts' => $this->listArtifacts(),
            'listBackendEnvironments' => $this->listBackendEnvironments(),
            'listBranches' => $this->listBranches(),
            'listDomainAssociations' => $this->listDomainAssociations(),
            'listJobs' => $this->listJobs(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWebhooks' => $this->listWebhooks(),
            'startDeployment' => $this->startDeployment(),
            'startJob' => $this->startJob(),
            'stopJob' => $this->stopJob(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateApp' => $this->updateApp(),
            'updateBranch' => $this->updateBranch(),
            'updateDomainAssociation' => $this->updateDomainAssociation(),
            'updateWebhook' => $this->updateWebhook(),
        };
    }
    private function createApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('repository'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('productionBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('customHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBranchCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCloneMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_DYNAMIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_COMPUTE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeployTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('framework'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED_NO_COOKIES'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('wafStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATION_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createBackendEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('backendEnvironment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableNotification'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalNumberOfJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('backend'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stackArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                new \PHPStan\Type\Constant\ConstantStringType('fileUploadUrls'),
                new \PHPStan\Type\Constant\ConstantStringType('zipUploadUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoSubDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainIAMRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('subDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subDomainSetting'),
                        new \PHPStan\Type\Constant\ConstantStringType('verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsRecord'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('customCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('webhookArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('repository'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('productionBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('customHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBranchCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCloneMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_DYNAMIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_COMPUTE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeployTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('framework'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED_NO_COOKIES'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('wafStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATION_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteBackendEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('backendEnvironment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableNotification'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalNumberOfJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('backend'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stackArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoSubDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainIAMRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('subDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subDomainSetting'),
                        new \PHPStan\Type\Constant\ConstantStringType('verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsRecord'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('customCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrlType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUCKET_PREFIX'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('webhookArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function generateAccessLogs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('logUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('repository'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('productionBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('customHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBranchCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCloneMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_DYNAMIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_COMPUTE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeployTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('framework'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED_NO_COOKIES'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('wafStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATION_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getArtifactUrl(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('artifactId'),
                new \PHPStan\Type\Constant\ConstantStringType('artifactUrl'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getBackendEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('backendEnvironment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableNotification'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalNumberOfJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('backend'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stackArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoSubDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainIAMRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('subDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subDomainSetting'),
                        new \PHPStan\Type\Constant\ConstantStringType('verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsRecord'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('customCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('job'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('steps'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('commitTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceUrlType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEB_HOOK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUCKET_PREFIX'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stepName'),
                        new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('logUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('artifactsUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('testArtifactsUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('testConfigUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('screenshots'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('context'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('webhookArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function listApps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('apps'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('repository'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('productionBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('customHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBranchCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCloneMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_DYNAMIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_COMPUTE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeployTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('framework'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED_NO_COOKIES'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('wafStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATION_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listArtifacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('artifacts'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('artifactFileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('artifactId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBackendEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('backendEnvironments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentArtifacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBranches(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branches'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableNotification'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalNumberOfJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('backend'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stackArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoSubDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainIAMRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('subDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subDomainSetting'),
                        new \PHPStan\Type\Constant\ConstantStringType('verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsRecord'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('customCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listJobs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrlType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUCKET_PREFIX'),
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
    private function listWebhooks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhooks'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('webhookArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrlType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUCKET_PREFIX'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function startJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrlType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUCKET_PREFIX'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function stopJob(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('jobSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('commitTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('jobType'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceUrlType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RELEASE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETRY'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('BUCKET_PREFIX'),
                    ]),
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
    private function updateApp(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('app'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('appId'),
                    new \PHPStan\Type\Constant\ConstantStringType('appArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('repository'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('iamServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBranchAutoDeletion'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('customRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('productionBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('customHeaders'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBranchCreation'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoBranchCreationConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryCloneMethod'),
                    new \PHPStan\Type\Constant\ConstantStringType('cacheConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('wafConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('WEB'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_DYNAMIC'),
                        new \PHPStan\Type\Constant\ConstantStringType('WEB_COMPUTE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('condition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeployTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stage'),
                        new \PHPStan\Type\Constant\ConstantStringType('framework'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                        new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                        new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                        new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                        new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                        new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SSH'),
                        new \PHPStan\Type\Constant\ConstantStringType('TOKEN'),
                        new \PHPStan\Type\Constant\ConstantStringType('SIGV4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED_NO_COOKIES'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('webAclArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('wafStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISASSOCIATION_FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateBranch(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('branch'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branchArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('stage'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableNotification'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentVariables'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoBuild'),
                    new \PHPStan\Type\Constant\ConstantStringType('customDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('framework'),
                    new \PHPStan\Type\Constant\ConstantStringType('activeJobId'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalNumberOfJobs'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableBasicAuth'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePerformanceMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('thumbnailUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('basicAuthCredentials'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildSpec'),
                    new \PHPStan\Type\Constant\ConstantStringType('ttl'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('enablePullRequestPreview'),
                    new \PHPStan\Type\Constant\ConstantStringType('pullRequestEnvironmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('destinationBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceBranch'),
                    new \PHPStan\Type\Constant\ConstantStringType('backendEnvironmentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('backend'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PRODUCTION'),
                        new \PHPStan\Type\Constant\ConstantStringType('BETA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEVELOPMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPERIMENTAL'),
                        new \PHPStan\Type\Constant\ConstantStringType('PULL_REQUEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('stackArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateDomainAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('domainAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('domainAssociationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('enableAutoSubDomain'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainCreationPatterns'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoSubDomainIAMRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('domainStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('subDomains'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTING_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_VERIFICATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTING_CUSTOM_CERTIFICATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DEPLOYMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWAITING_APP_CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subDomainSetting'),
                        new \PHPStan\Type\Constant\ConstantStringType('verified'),
                        new \PHPStan\Type\Constant\ConstantStringType('dnsRecord'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('customCertificateArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('certificateVerificationDNSRecord'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMPLIFY_MANAGED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateWebhook(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('webhook'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('webhookArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookId'),
                    new \PHPStan\Type\Constant\ConstantStringType('webhookUrl'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('createTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
}