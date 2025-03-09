<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LicenseManagerLinuxSubscriptionsClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LicenseManagerLinuxSubscriptions\LicenseManagerLinuxSubscriptionsClient>
     */
    public function getClass(): string
    {
        return \Aws\LicenseManagerLinuxSubscriptions\LicenseManagerLinuxSubscriptionsClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'deregisterSubscriptionProvider',
            'getRegisteredSubscriptionProvider',
            'getServiceSettings',
            'listLinuxSubscriptionInstances',
            'listLinuxSubscriptions',
            'listRegisteredSubscriptionProviders',
            'listTagsForResource',
            'registerSubscriptionProvider',
            'tagResource',
            'untagResource',
            'updateServiceSettings',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'deregisterSubscriptionProvider' => $this->deregisterSubscriptionProvider(),
            'getRegisteredSubscriptionProvider' => $this->getRegisteredSubscriptionProvider(),
            'getServiceSettings' => $this->getServiceSettings(),
            'listLinuxSubscriptionInstances' => $this->listLinuxSubscriptionInstances(),
            'listLinuxSubscriptions' => $this->listLinuxSubscriptions(),
            'listRegisteredSubscriptionProviders' => $this->listRegisteredSubscriptionProviders(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerSubscriptionProvider' => $this->registerSubscriptionProvider(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateServiceSettings' => $this->updateServiceSettings(),
        };
    }
    private function deregisterSubscriptionProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getRegisteredSubscriptionProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulDataRetrievalTime'),
                new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderSource'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderStatusMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('RedHat'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getServiceSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HomeRegions'),
                new \PHPStan\Type\Constant\ConstantStringType('LinuxSubscriptionsDiscovery'),
                new \PHPStan\Type\Constant\ConstantStringType('LinuxSubscriptionsDiscoverySettings'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationIntegration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegions'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listLinuxSubscriptionInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AccountID'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmiId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DualSubscription'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceID'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OsVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredWithSubscriptionProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderCreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderUpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsageOperation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function listLinuxSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Subscriptions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listRegisteredSubscriptionProviders(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('RegisteredSubscriptionProviders'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulDataRetrievalTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderStatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('RedHat'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\StringType(),
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
    private function registerSubscriptionProvider(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderSource'),
                new \PHPStan\Type\Constant\ConstantStringType('SubscriptionProviderStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('RedHat'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
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
    private function updateServiceSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HomeRegions'),
                new \PHPStan\Type\Constant\ConstantStringType('LinuxSubscriptionsDiscovery'),
                new \PHPStan\Type\Constant\ConstantStringType('LinuxSubscriptionsDiscoverySettings'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationIntegration'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRegions'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                    new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}