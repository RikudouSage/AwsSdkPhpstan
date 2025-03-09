<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class EKSClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\EKS\EKSClient>
     */
    public function getClass(): string
    {
        return \Aws\EKS\EKSClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateAccessPolicy',
            'associateEncryptionConfig',
            'associateIdentityProviderConfig',
            'createAccessEntry',
            'createAddon',
            'createCluster',
            'createEksAnywhereSubscription',
            'createFargateProfile',
            'createNodegroup',
            'createPodIdentityAssociation',
            'deleteAccessEntry',
            'deleteAddon',
            'deleteCluster',
            'deleteEksAnywhereSubscription',
            'deleteFargateProfile',
            'deleteNodegroup',
            'deletePodIdentityAssociation',
            'deregisterCluster',
            'describeAccessEntry',
            'describeAddon',
            'describeAddonConfiguration',
            'describeAddonVersions',
            'describeCluster',
            'describeClusterVersions',
            'describeEksAnywhereSubscription',
            'describeFargateProfile',
            'describeIdentityProviderConfig',
            'describeInsight',
            'describeNodegroup',
            'describePodIdentityAssociation',
            'describeUpdate',
            'disassociateAccessPolicy',
            'disassociateIdentityProviderConfig',
            'listAccessEntries',
            'listAccessPolicies',
            'listAddons',
            'listAssociatedAccessPolicies',
            'listClusters',
            'listEksAnywhereSubscriptions',
            'listFargateProfiles',
            'listIdentityProviderConfigs',
            'listInsights',
            'listNodegroups',
            'listPodIdentityAssociations',
            'listTagsForResource',
            'listUpdates',
            'registerCluster',
            'tagResource',
            'untagResource',
            'updateAccessEntry',
            'updateAddon',
            'updateClusterConfig',
            'updateClusterVersion',
            'updateEksAnywhereSubscription',
            'updateNodegroupConfig',
            'updateNodegroupVersion',
            'updatePodIdentityAssociation',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateAccessPolicy' => $this->associateAccessPolicy(),
            'associateEncryptionConfig' => $this->associateEncryptionConfig(),
            'associateIdentityProviderConfig' => $this->associateIdentityProviderConfig(),
            'createAccessEntry' => $this->createAccessEntry(),
            'createAddon' => $this->createAddon(),
            'createCluster' => $this->createCluster(),
            'createEksAnywhereSubscription' => $this->createEksAnywhereSubscription(),
            'createFargateProfile' => $this->createFargateProfile(),
            'createNodegroup' => $this->createNodegroup(),
            'createPodIdentityAssociation' => $this->createPodIdentityAssociation(),
            'deleteAccessEntry' => $this->deleteAccessEntry(),
            'deleteAddon' => $this->deleteAddon(),
            'deleteCluster' => $this->deleteCluster(),
            'deleteEksAnywhereSubscription' => $this->deleteEksAnywhereSubscription(),
            'deleteFargateProfile' => $this->deleteFargateProfile(),
            'deleteNodegroup' => $this->deleteNodegroup(),
            'deletePodIdentityAssociation' => $this->deletePodIdentityAssociation(),
            'deregisterCluster' => $this->deregisterCluster(),
            'describeAccessEntry' => $this->describeAccessEntry(),
            'describeAddon' => $this->describeAddon(),
            'describeAddonConfiguration' => $this->describeAddonConfiguration(),
            'describeAddonVersions' => $this->describeAddonVersions(),
            'describeCluster' => $this->describeCluster(),
            'describeClusterVersions' => $this->describeClusterVersions(),
            'describeEksAnywhereSubscription' => $this->describeEksAnywhereSubscription(),
            'describeFargateProfile' => $this->describeFargateProfile(),
            'describeIdentityProviderConfig' => $this->describeIdentityProviderConfig(),
            'describeInsight' => $this->describeInsight(),
            'describeNodegroup' => $this->describeNodegroup(),
            'describePodIdentityAssociation' => $this->describePodIdentityAssociation(),
            'describeUpdate' => $this->describeUpdate(),
            'disassociateAccessPolicy' => $this->disassociateAccessPolicy(),
            'disassociateIdentityProviderConfig' => $this->disassociateIdentityProviderConfig(),
            'listAccessEntries' => $this->listAccessEntries(),
            'listAccessPolicies' => $this->listAccessPolicies(),
            'listAddons' => $this->listAddons(),
            'listAssociatedAccessPolicies' => $this->listAssociatedAccessPolicies(),
            'listClusters' => $this->listClusters(),
            'listEksAnywhereSubscriptions' => $this->listEksAnywhereSubscriptions(),
            'listFargateProfiles' => $this->listFargateProfiles(),
            'listIdentityProviderConfigs' => $this->listIdentityProviderConfigs(),
            'listInsights' => $this->listInsights(),
            'listNodegroups' => $this->listNodegroups(),
            'listPodIdentityAssociations' => $this->listPodIdentityAssociations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listUpdates' => $this->listUpdates(),
            'registerCluster' => $this->registerCluster(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccessEntry' => $this->updateAccessEntry(),
            'updateAddon' => $this->updateAddon(),
            'updateClusterConfig' => $this->updateClusterConfig(),
            'updateClusterVersion' => $this->updateClusterVersion(),
            'updateEksAnywhereSubscription' => $this->updateEksAnywhereSubscription(),
            'updateNodegroupConfig' => $this->updateNodegroupConfig(),
            'updateNodegroupVersion' => $this->updateNodegroupVersion(),
            'updatePodIdentityAssociation' => $this->updatePodIdentityAssociation(),
        };
    }
    private function associateAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('associatedAccessPolicy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function associateEncryptionConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function associateIdentityProviderConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createAccessEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessEntry'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessEntryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('username'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createAddon(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('addon'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccountRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('podIdentityAssociations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                                new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionNeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonPermissionFailure'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('productId'),
                        new \PHPStan\Type\Constant\ConstantStringType('productUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesVpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('identity'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('outpostConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('upgradePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('zonalShiftConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPublicAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPrivateAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicAccessCidrs'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv4Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv6Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticLoadBalancing'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterLogging'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('api'),
                                new \PHPStan\Type\Constant\ConstantStringType('audit'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticator'),
                                new \PHPStan\Type\Constant\ConstantStringType('controllerManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheduler'),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('oidc'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('keyArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('activationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2ServiceNotSubscribed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsGrantRevoked'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyMarkedForDeletion'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('StsRegionalEndpointDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outpostArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlaneInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlanePlacement'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bootstrapClusterCreatorAdminPermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationMode'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_AND_CONFIG_MAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIG_MAP'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('supportType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('remoteNodeNetworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodNetworks'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodePools'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blockStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createEksAnywhereSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('term'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRenew'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('token'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createFargateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fargateProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fargateProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('podExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PodExecutionRoleAlreadyInUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createNodegroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodegroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodegroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodegroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('scalingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('amiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('taints'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('diskSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeRepairConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_BLOCK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredSize'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2SshKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceSecurityGroups'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_x86_64_GPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_ARM_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_ARM_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_ARM_64_NVIDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_x86_64_NVIDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CORE_2019_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_FULL_2019_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CORE_2022_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_FULL_2022_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_ARM_64_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_NEURON'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_NVIDIA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('effect'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SCHEDULE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EXECUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFER_NO_SCHEDULE'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSecurityGroup'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupDeletionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateVersionMismatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfileNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetMissingIpv6Assignment'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamNodeRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('AsgInstanceLaunchFailures'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmiIdNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupOptInRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupRateLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateDeletionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateMaxLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetListTooLong'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamThrottling'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeTerminationFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceEc2LaunchTemplateNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupInstanceRefreshActive'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesLabelInvalid'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateVersionMaxLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypeDoesNotExist'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('maxUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxUnavailablePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateStrategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINIMAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createPodIdentityAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('association'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteAccessEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteAddon(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('addon'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccountRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('podIdentityAssociations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                                new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionNeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonPermissionFailure'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('productId'),
                        new \PHPStan\Type\Constant\ConstantStringType('productUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function deleteCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesVpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('identity'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('outpostConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('upgradePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('zonalShiftConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPublicAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPrivateAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicAccessCidrs'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv4Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv6Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticLoadBalancing'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterLogging'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('api'),
                                new \PHPStan\Type\Constant\ConstantStringType('audit'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticator'),
                                new \PHPStan\Type\Constant\ConstantStringType('controllerManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheduler'),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('oidc'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('keyArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('activationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2ServiceNotSubscribed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsGrantRevoked'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyMarkedForDeletion'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('StsRegionalEndpointDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outpostArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlaneInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlanePlacement'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bootstrapClusterCreatorAdminPermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationMode'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_AND_CONFIG_MAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIG_MAP'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('supportType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('remoteNodeNetworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodNetworks'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodePools'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blockStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteEksAnywhereSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('term'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRenew'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('token'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function deleteFargateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fargateProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fargateProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('podExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PodExecutionRoleAlreadyInUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteNodegroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodegroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodegroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodegroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('scalingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('amiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('taints'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('diskSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeRepairConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_BLOCK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredSize'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2SshKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceSecurityGroups'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_x86_64_GPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_ARM_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_ARM_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_ARM_64_NVIDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_x86_64_NVIDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CORE_2019_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_FULL_2019_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CORE_2022_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_FULL_2022_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_ARM_64_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_NEURON'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_NVIDIA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('effect'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SCHEDULE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EXECUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFER_NO_SCHEDULE'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSecurityGroup'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupDeletionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateVersionMismatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfileNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetMissingIpv6Assignment'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamNodeRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('AsgInstanceLaunchFailures'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmiIdNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupOptInRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupRateLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateDeletionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateMaxLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetListTooLong'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamThrottling'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeTerminationFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceEc2LaunchTemplateNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupInstanceRefreshActive'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesLabelInvalid'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateVersionMaxLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypeDoesNotExist'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('maxUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxUnavailablePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateStrategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINIMAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function deletePodIdentityAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('association'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deregisterCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesVpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('identity'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('outpostConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('upgradePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('zonalShiftConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPublicAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPrivateAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicAccessCidrs'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv4Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv6Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticLoadBalancing'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterLogging'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('api'),
                                new \PHPStan\Type\Constant\ConstantStringType('audit'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticator'),
                                new \PHPStan\Type\Constant\ConstantStringType('controllerManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheduler'),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('oidc'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('keyArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('activationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2ServiceNotSubscribed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsGrantRevoked'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyMarkedForDeletion'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('StsRegionalEndpointDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outpostArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlaneInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlanePlacement'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bootstrapClusterCreatorAdminPermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationMode'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_AND_CONFIG_MAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIG_MAP'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('supportType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('remoteNodeNetworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodNetworks'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodePools'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blockStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeAccessEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessEntry'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessEntryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('username'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeAddon(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('addon'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccountRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationValues'),
                    new \PHPStan\Type\Constant\ConstantStringType('podIdentityAssociations'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                                new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonSubscriptionNeeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddonPermissionFailure'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('productId'),
                        new \PHPStan\Type\Constant\ConstantStringType('productUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeAddonConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('addonName'),
                new \PHPStan\Type\Constant\ConstantStringType('addonVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('configurationSchema'),
                new \PHPStan\Type\Constant\ConstantStringType('podIdentityConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedManagedPolicies'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function describeAddonVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('addons'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('addonName'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('addonVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('marketplaceInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('addonVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('computeTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('compatibilities'),
                        new \PHPStan\Type\Constant\ConstantStringType('requiresConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('requiresIamPermissions'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('clusterVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('platformVersions'),
                            new \PHPStan\Type\Constant\ConstantStringType('defaultVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('productId'),
                        new \PHPStan\Type\Constant\ConstantStringType('productUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesVpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('identity'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('outpostConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('upgradePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('zonalShiftConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPublicAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPrivateAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicAccessCidrs'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv4Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv6Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticLoadBalancing'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterLogging'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('api'),
                                new \PHPStan\Type\Constant\ConstantStringType('audit'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticator'),
                                new \PHPStan\Type\Constant\ConstantStringType('controllerManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheduler'),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('oidc'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('keyArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('activationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2ServiceNotSubscribed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsGrantRevoked'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyMarkedForDeletion'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('StsRegionalEndpointDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outpostArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlaneInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlanePlacement'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bootstrapClusterCreatorAdminPermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationMode'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_AND_CONFIG_MAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIG_MAP'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('supportType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('remoteNodeNetworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodNetworks'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodePools'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blockStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeClusterVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('clusterVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultPlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('defaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('endOfStandardSupportDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('endOfExtendedSupportDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('versionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesPatchVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unsupported'),
                        new \PHPStan\Type\Constant\ConstantStringType('standard-support'),
                        new \PHPStan\Type\Constant\ConstantStringType('extended-support'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD_SUPPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTENDED_SUPPORT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeEksAnywhereSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('term'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRenew'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('token'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeFargateProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fargateProfile'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('fargateProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('fargateProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('podExecutionRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('selectors'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PodExecutionRoleAlreadyInUse'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeIdentityProviderConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('identityProviderConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('oidc'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('identityProviderConfigName'),
                        new \PHPStan\Type\Constant\ConstantStringType('identityProviderConfigArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('issuerUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('clientId'),
                        new \PHPStan\Type\Constant\ConstantStringType('usernameClaim'),
                        new \PHPStan\Type\Constant\ConstantStringType('usernamePrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupsClaim'),
                        new \PHPStan\Type\Constant\ConstantStringType('groupsPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('requiredClaims'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeInsight(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('insight'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTransitionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('insightStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('categorySpecificSummary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_READINESS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('insightStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('kubernetesResourceUri'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PASSING'),
                                new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deprecationDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('addonCompatibilityDetails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('usage'),
                            new \PHPStan\Type\Constant\ConstantStringType('replacedWith'),
                            new \PHPStan\Type\Constant\ConstantStringType('stopServingVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('startServingReplacementVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('clientStats'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userAgent'),
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfRequestsLast30Days'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastRequestTime'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('compatibleVersions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeNodegroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodegroup'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nodegroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodegroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('releaseVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('capacityType'),
                    new \PHPStan\Type\Constant\ConstantStringType('scalingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnets'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteAccess'),
                    new \PHPStan\Type\Constant\ConstantStringType('amiType'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('labels'),
                    new \PHPStan\Type\Constant\ConstantStringType('taints'),
                    new \PHPStan\Type\Constant\ConstantStringType('resources'),
                    new \PHPStan\Type\Constant\ConstantStringType('diskSize'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('nodeRepairConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('launchTemplate'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEGRADED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ON_DEMAND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPOT'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPACITY_BLOCK'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('minSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('desiredSize'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ec2SshKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceSecurityGroups'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_x86_64_GPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2_ARM_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_ARM_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_ARM_64_NVIDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOTTLEROCKET_x86_64_NVIDIA'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CORE_2019_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_FULL_2019_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_CORE_2022_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('WINDOWS_FULL_2022_x86_64'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_ARM_64_STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_NEURON'),
                        new \PHPStan\Type\Constant\ConstantStringType('AL2023_x86_64_NVIDIA'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('effect'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NO_SCHEDULE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_EXECUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PREFER_NO_SCHEDULE'),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autoScalingGroups'),
                        new \PHPStan\Type\Constant\ConstantStringType('remoteAccessSecurityGroup'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupDeletionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateVersionMismatch'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamInstanceProfileNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetMissingIpv6Assignment'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamNodeRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('AsgInstanceLaunchFailures'),
                                new \PHPStan\Type\Constant\ConstantStringType('InstanceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('AmiIdNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupOptInRequired'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupRateLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateDeletionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateInvalidConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateMaxLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetListTooLong'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamThrottling'),
                                new \PHPStan\Type\Constant\ConstantStringType('NodeTerminationFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('SourceEc2LaunchTemplateNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('LimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                new \PHPStan\Type\Constant\ConstantStringType('AutoScalingGroupInstanceRefreshActive'),
                                new \PHPStan\Type\Constant\ConstantStringType('KubernetesLabelInvalid'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2LaunchTemplateVersionMaxLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2InstanceTypeDoesNotExist'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('maxUnavailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('maxUnavailablePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateStrategy'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('MINIMAL'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describePodIdentityAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('association'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function disassociateAccessPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateIdentityProviderConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function listAccessEntries(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessEntries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAccessPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAddons(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('addons'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociatedAccessPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('associatedAccessPolicies'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('policyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessScope'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('namespaces'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('cluster'),
                            new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
            ]),
        ]);
    }
    private function listClusters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clusters'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEksAnywhereSubscriptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('term'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRenew'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('token'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFargateProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('fargateProfileNames'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listIdentityProviderConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('identityProviderConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInsights(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('insights'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('category'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastRefreshTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastTransitionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('insightStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('UPGRADE_READINESS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PASSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('WARNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listNodegroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nodegroups'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPodIdentityAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerArn'),
                ], [
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
    private function listUpdates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('updateIds'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerCluster(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesVpcConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('identity'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('certificateAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('clientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('platformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectorConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('health'),
                    new \PHPStan\Type\Constant\ConstantStringType('outpostConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('upgradePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('zonalShiftConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('remoteNetworkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('computeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('storageConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('clusterSecurityGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vpcId'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPublicAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('endpointPrivateAccess'),
                        new \PHPStan\Type\Constant\ConstantStringType('publicAccessCidrs'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv4Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceIpv6Cidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('elasticLoadBalancing'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('clusterLogging'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('types'),
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('api'),
                                new \PHPStan\Type\Constant\ConstantStringType('audit'),
                                new \PHPStan\Type\Constant\ConstantStringType('authenticator'),
                                new \PHPStan\Type\Constant\ConstantStringType('controllerManager'),
                                new \PHPStan\Type\Constant\ConstantStringType('scheduler'),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('oidc'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('issuer'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('data'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('resources'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('keyArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('activationId'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('activationExpiry'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('issues'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('code'),
                            new \PHPStan\Type\Constant\ConstantStringType('message'),
                            new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                                new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                                new \PHPStan\Type\Constant\ConstantStringType('InternalFailure'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceLimitExceeded'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('IamRoleNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('VpcNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2ServiceNotSubscribed'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SubnetNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('Ec2SecurityGroupNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsGrantRevoked'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyNotFound'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyMarkedForDeletion'),
                                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('StsRegionalEndpointDisabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('UnsupportedVersion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Other'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('outpostArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlaneInstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('controlPlanePlacement'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('groupName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bootstrapClusterCreatorAdminPermissions'),
                        new \PHPStan\Type\Constant\ConstantStringType('authenticationMode'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('API'),
                            new \PHPStan\Type\Constant\ConstantStringType('API_AND_CONFIG_MAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CONFIG_MAP'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('supportType'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTENDED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('remoteNodeNetworks'),
                        new \PHPStan\Type\Constant\ConstantStringType('remotePodNetworks'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cidrs'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodePools'),
                        new \PHPStan\Type\Constant\ConstantStringType('nodeRoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('blockStorage'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
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
    private function updateAccessEntry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accessEntry'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('principalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kubernetesGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('accessEntryArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('username'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateAddon(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateClusterConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateClusterVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateEksAnywhereSubscription(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('subscription'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('effectiveDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('expirationDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseQuantity'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseType'),
                    new \PHPStan\Type\Constant\ConstantStringType('term'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('autoRenew'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenseArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('licenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Cluster'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('token'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateNodegroupConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateNodegroupVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('update'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('params'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('InProgress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        new \PHPStan\Type\Constant\ConstantStringType('Successful'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VersionUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndpointAccessUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LoggingUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DisassociateIdentityProviderConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociateEncryptionConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddonUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicyUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfigUpdate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutoModeUpdate'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Version'),
                            new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPrivateAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndpointPublicAccess'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterLogging'),
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('LabelsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToAdd'),
                            new \PHPStan\Type\Constant\ConstantStringType('TaintsToRemove'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReleaseVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('PublicAccessCidrs'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LaunchTemplateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityProviderConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncryptionConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddonVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceAccountRoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResolveConflicts'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxUnavailablePercentage'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeRepairEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateStrategy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationValues'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroups'),
                            new \PHPStan\Type\Constant\ConstantStringType('Subnets'),
                            new \PHPStan\Type\Constant\ConstantStringType('AuthenticationMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodIdentityAssociations'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpgradePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZonalShiftConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComputeConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('StorageConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('KubernetesNetworkConfig'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceIds'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('EniLimitReached'),
                            new \PHPStan\Type\Constant\ConstantStringType('IpNotAvailable'),
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('OperationNotPermitted'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcIdNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('NodeCreationFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('PodEvictionFailure'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientFreeAddresses'),
                            new \PHPStan\Type\Constant\ConstantStringType('ClusterUnreachable'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientNumberOfReplicas'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConfigurationConflict'),
                            new \PHPStan\Type\Constant\ConstantStringType('AdmissionRequestDenied'),
                            new \PHPStan\Type\Constant\ConstantStringType('UnsupportedAddonModification'),
                            new \PHPStan\Type\Constant\ConstantStringType('K8sResourceNotFound'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updatePodIdentityAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('association'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('clusterName'),
                    new \PHPStan\Type\Constant\ConstantStringType('namespace'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}