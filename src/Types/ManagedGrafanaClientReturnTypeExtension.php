<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ManagedGrafanaClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ManagedGrafana\ManagedGrafanaClient>
     */
    public function getClass(): string
    {
        return \Aws\ManagedGrafana\ManagedGrafanaClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateLicense',
            'createWorkspace',
            'createWorkspaceApiKey',
            'createWorkspaceServiceAccount',
            'createWorkspaceServiceAccountToken',
            'deleteWorkspace',
            'deleteWorkspaceApiKey',
            'deleteWorkspaceServiceAccount',
            'deleteWorkspaceServiceAccountToken',
            'describeWorkspace',
            'describeWorkspaceAuthentication',
            'describeWorkspaceConfiguration',
            'disassociateLicense',
            'listPermissions',
            'listTagsForResource',
            'listVersions',
            'listWorkspaceServiceAccountTokens',
            'listWorkspaceServiceAccounts',
            'listWorkspaces',
            'tagResource',
            'untagResource',
            'updatePermissions',
            'updateWorkspace',
            'updateWorkspaceAuthentication',
            'updateWorkspaceConfiguration',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateLicense' => $this->associateLicense(),
            'createWorkspace' => $this->createWorkspace(),
            'createWorkspaceApiKey' => $this->createWorkspaceApiKey(),
            'createWorkspaceServiceAccount' => $this->createWorkspaceServiceAccount(),
            'createWorkspaceServiceAccountToken' => $this->createWorkspaceServiceAccountToken(),
            'deleteWorkspace' => $this->deleteWorkspace(),
            'deleteWorkspaceApiKey' => $this->deleteWorkspaceApiKey(),
            'deleteWorkspaceServiceAccount' => $this->deleteWorkspaceServiceAccount(),
            'deleteWorkspaceServiceAccountToken' => $this->deleteWorkspaceServiceAccountToken(),
            'describeWorkspace' => $this->describeWorkspace(),
            'describeWorkspaceAuthentication' => $this->describeWorkspaceAuthentication(),
            'describeWorkspaceConfiguration' => $this->describeWorkspaceConfiguration(),
            'disassociateLicense' => $this->disassociateLicense(),
            'listPermissions' => $this->listPermissions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listVersions' => $this->listVersions(),
            'listWorkspaceServiceAccountTokens' => $this->listWorkspaceServiceAccountTokens(),
            'listWorkspaceServiceAccounts' => $this->listWorkspaceServiceAccounts(),
            'listWorkspaces' => $this->listWorkspaces(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updatePermissions' => $this->updatePermissions(),
            'updateWorkspace' => $this->updateWorkspace(),
            'updateWorkspaceAuthentication' => $this->updateWorkspaceAuthentication(),
            'updateWorkspaceConfiguration' => $this->updateWorkspaceConfiguration(),
        };
    }
    private function associateLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialConsumed'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkAccessControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('workspaceRoleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMETHEUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('XRAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWINMAKER'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('prefixListIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpceIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialConsumed'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkAccessControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('workspaceRoleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMETHEUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('XRAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWINMAKER'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('prefixListIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpceIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createWorkspaceApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('key'),
                new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkspaceServiceAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('grafanaRole'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                    new \PHPStan\Type\Constant\ConstantStringType('EDITOR'),
                    new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkspaceServiceAccountToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccountToken'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialConsumed'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkAccessControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('workspaceRoleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMETHEUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('XRAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWINMAKER'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('prefixListIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpceIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteWorkspaceApiKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('keyName'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWorkspaceServiceAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWorkspaceServiceAccountToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('tokenId'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialConsumed'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkAccessControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('workspaceRoleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMETHEUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('XRAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWINMAKER'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('prefixListIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpceIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeWorkspaceAuthentication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authentication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsSso'),
                    new \PHPStan\Type\Constant\ConstantStringType('providers'),
                    new \PHPStan\Type\Constant\ConstantStringType('saml'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ssoClientId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowedOrganizations'),
                            new \PHPStan\Type\Constant\ConstantStringType('assertionAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('idpMetadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('loginValidityDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleValues'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('email'),
                                new \PHPStan\Type\Constant\ConstantStringType('groups'),
                                new \PHPStan\Type\Constant\ConstantStringType('login'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('org'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                                new \PHPStan\Type\Constant\ConstantStringType('xml'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('admin'),
                                new \PHPStan\Type\Constant\ConstantStringType('editor'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeWorkspaceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialConsumed'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkAccessControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('workspaceRoleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMETHEUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('XRAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWINMAKER'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('prefixListIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpceIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listPermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('permissions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('role'),
                    new \PHPStan\Type\Constant\ConstantStringType('user'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDITOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SSO_USER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSO_GROUP'),
                        ]),
                    ]),
                ])),
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
    private function listVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('grafanaVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkspaceServiceAccountTokens(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccountTokens'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('expiresAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastUsedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkspaceServiceAccounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceAccounts'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaceId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('isDisabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                        new \PHPStan\Type\Constant\ConstantStringType('EDITOR'),
                        new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkspaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('workspaces'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
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
    private function updatePermissions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('causedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('code'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('role'),
                        new \PHPStan\Type\Constant\ConstantStringType('users'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('REVOKE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADMIN'),
                            new \PHPStan\Type\Constant\ConstantStringType('EDITOR'),
                            new \PHPStan\Type\Constant\ConstantStringType('VIEWER'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SSO_USER'),
                                new \PHPStan\Type\Constant\ConstantStringType('SSO_GROUP'),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateWorkspace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workspace'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAccessType'),
                    new \PHPStan\Type\Constant\ConstantStringType('authentication'),
                    new \PHPStan\Type\Constant\ConstantStringType('created'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialConsumed'),
                    new \PHPStan\Type\Constant\ConstantStringType('freeTrialExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('grafanaVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseExpiration'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('modified'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('networkAccessControl'),
                    new \PHPStan\Type\Constant\ConstantStringType('notificationDestinations'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('permissionType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('vpcConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('workspaceRoleArn'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('providers'),
                        new \PHPStan\Type\Constant\ConstantStringType('samlConfigurationStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_OPENSEARCH_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROMETHEUS'),
                        new \PHPStan\Type\Constant\ConstantStringType('XRAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TIMESTREAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITEWISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ATHENA'),
                        new \PHPStan\Type\Constant\ConstantStringType('REDSHIFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('TWINMAKER'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTERPRISE_FREE_TRIAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('prefixListIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpceIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('SNS')),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('LICENSE_REMOVAL_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VERSION_UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateWorkspaceAuthentication(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('authentication'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsSso'),
                    new \PHPStan\Type\Constant\ConstantStringType('providers'),
                    new \PHPStan\Type\Constant\ConstantStringType('saml'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ssoClientId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SSO'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAML'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('allowedOrganizations'),
                            new \PHPStan\Type\Constant\ConstantStringType('assertionAttributes'),
                            new \PHPStan\Type\Constant\ConstantStringType('idpMetadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('loginValidityDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('roleValues'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('email'),
                                new \PHPStan\Type\Constant\ConstantStringType('groups'),
                                new \PHPStan\Type\Constant\ConstantStringType('login'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('org'),
                                new \PHPStan\Type\Constant\ConstantStringType('role'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('url'),
                                new \PHPStan\Type\Constant\ConstantStringType('xml'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('admin'),
                                new \PHPStan\Type\Constant\ConstantStringType('editor'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIGURED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CONFIGURED'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateWorkspaceConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}