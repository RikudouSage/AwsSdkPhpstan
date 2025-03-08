<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LicenseManagerUserSubscriptionsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LicenseManagerUserSubscriptions\LicenseManagerUserSubscriptionsClient>
     */
    public function getClass(): string
    {
        return \Aws\LicenseManagerUserSubscriptions\LicenseManagerUserSubscriptionsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateUser',
            'createLicenseServerEndpoint',
            'deleteLicenseServerEndpoint',
            'deregisterIdentityProvider',
            'disassociateUser',
            'listIdentityProviders',
            'listInstances',
            'listLicenseServerEndpoints',
            'listProductSubscriptions',
            'listTagsForResource',
            'listUserAssociations',
            'registerIdentityProvider',
            'startProductSubscription',
            'stopProductSubscription',
            'tagResource',
            'untagResource',
            'updateIdentityProviderSettings',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateUser' => $this->associateUser(),
            'createLicenseServerEndpoint' => $this->createLicenseServerEndpoint(),
            'deleteLicenseServerEndpoint' => $this->deleteLicenseServerEndpoint(),
            'deregisterIdentityProvider' => $this->deregisterIdentityProvider(),
            'disassociateUser' => $this->disassociateUser(),
            'listIdentityProviders' => $this->listIdentityProviders(),
            'listInstances' => $this->listInstances(),
            'listLicenseServerEndpoints' => $this->listLicenseServerEndpoints(),
            'listProductSubscriptions' => $this->listProductSubscriptions(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listUserAssociations' => $this->listUserAssociations(),
            'registerIdentityProvider' => $this->registerIdentityProvider(),
            'startProductSubscription' => $this->startProductSubscription(),
            'stopProductSubscription' => $this->stopProductSubscription(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateIdentityProviderSettings' => $this->updateIdentityProviderSettings(),
        };
    }
    private function associateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceUserSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisassociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createLicenseServerEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLicenseServerEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointProvisioningStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisioningStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('RDS_SAL'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deregisterIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disassociateUser(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceUserSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisassociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listIdentityProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastStatusCheckDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Products'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
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
    private function listLicenseServerEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServerEndpointProvisioningStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseServers'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisioningStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_APPLICABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('RDS_SAL'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProductSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ProductUserSummaries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionEndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function listUserAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InstanceUserSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisassociationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
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
    private function registerIdentityProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startProductSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductUserSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionEndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function stopProductSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductUserSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Domain'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductUserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionEndDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionStartDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Username'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function updateIdentityProviderSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Product'),
                    new \PHPStan\Type\Constant\ConstantStringType('Settings'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryIdentityProvider'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectorySettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActiveDirectoryType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DirectoryId'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DomainCredentialsProvider'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainIpv4List'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                                new \PHPStan\Type\Constant\ConstantStringType('DomainNetworkSettings'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SecretsManagerCredentialsProvider'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SecretId'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                                new \PHPStan\Type\Constant\ConstantStringType('AWS_MANAGED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}