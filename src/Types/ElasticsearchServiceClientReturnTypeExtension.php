<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ElasticsearchServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ElasticsearchService\ElasticsearchServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\ElasticsearchService\ElasticsearchServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptInboundCrossClusterSearchConnection',
            'addTags',
            'associatePackage',
            'authorizeVpcEndpointAccess',
            'cancelDomainConfigChange',
            'cancelElasticsearchServiceSoftwareUpdate',
            'createElasticsearchDomain',
            'createOutboundCrossClusterSearchConnection',
            'createPackage',
            'createVpcEndpoint',
            'deleteElasticsearchDomain',
            'deleteElasticsearchServiceRole',
            'deleteInboundCrossClusterSearchConnection',
            'deleteOutboundCrossClusterSearchConnection',
            'deletePackage',
            'deleteVpcEndpoint',
            'describeDomainAutoTunes',
            'describeDomainChangeProgress',
            'describeElasticsearchDomain',
            'describeElasticsearchDomainConfig',
            'describeElasticsearchDomains',
            'describeElasticsearchInstanceTypeLimits',
            'describeInboundCrossClusterSearchConnections',
            'describeOutboundCrossClusterSearchConnections',
            'describePackages',
            'describeReservedElasticsearchInstanceOfferings',
            'describeReservedElasticsearchInstances',
            'describeVpcEndpoints',
            'dissociatePackage',
            'getCompatibleElasticsearchVersions',
            'getPackageVersionHistory',
            'getUpgradeHistory',
            'getUpgradeStatus',
            'listDomainNames',
            'listDomainsForPackage',
            'listElasticsearchInstanceTypes',
            'listElasticsearchVersions',
            'listPackagesForDomain',
            'listTags',
            'listVpcEndpointAccess',
            'listVpcEndpoints',
            'listVpcEndpointsForDomain',
            'purchaseReservedElasticsearchInstanceOffering',
            'rejectInboundCrossClusterSearchConnection',
            'removeTags',
            'revokeVpcEndpointAccess',
            'startElasticsearchServiceSoftwareUpdate',
            'updateElasticsearchDomainConfig',
            'updatePackage',
            'updateVpcEndpoint',
            'upgradeElasticsearchDomain',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptInboundCrossClusterSearchConnection' => $this->acceptInboundCrossClusterSearchConnection(),
            'addTags' => $this->addTags(),
            'associatePackage' => $this->associatePackage(),
            'authorizeVpcEndpointAccess' => $this->authorizeVpcEndpointAccess(),
            'cancelDomainConfigChange' => $this->cancelDomainConfigChange(),
            'cancelElasticsearchServiceSoftwareUpdate' => $this->cancelElasticsearchServiceSoftwareUpdate(),
            'createElasticsearchDomain' => $this->createElasticsearchDomain(),
            'createOutboundCrossClusterSearchConnection' => $this->createOutboundCrossClusterSearchConnection(),
            'createPackage' => $this->createPackage(),
            'createVpcEndpoint' => $this->createVpcEndpoint(),
            'deleteElasticsearchDomain' => $this->deleteElasticsearchDomain(),
            'deleteElasticsearchServiceRole' => $this->deleteElasticsearchServiceRole(),
            'deleteInboundCrossClusterSearchConnection' => $this->deleteInboundCrossClusterSearchConnection(),
            'deleteOutboundCrossClusterSearchConnection' => $this->deleteOutboundCrossClusterSearchConnection(),
            'deletePackage' => $this->deletePackage(),
            'deleteVpcEndpoint' => $this->deleteVpcEndpoint(),
            'describeDomainAutoTunes' => $this->describeDomainAutoTunes(),
            'describeDomainChangeProgress' => $this->describeDomainChangeProgress(),
            'describeElasticsearchDomain' => $this->describeElasticsearchDomain(),
            'describeElasticsearchDomainConfig' => $this->describeElasticsearchDomainConfig(),
            'describeElasticsearchDomains' => $this->describeElasticsearchDomains(),
            'describeElasticsearchInstanceTypeLimits' => $this->describeElasticsearchInstanceTypeLimits(),
            'describeInboundCrossClusterSearchConnections' => $this->describeInboundCrossClusterSearchConnections(),
            'describeOutboundCrossClusterSearchConnections' => $this->describeOutboundCrossClusterSearchConnections(),
            'describePackages' => $this->describePackages(),
            'describeReservedElasticsearchInstanceOfferings' => $this->describeReservedElasticsearchInstanceOfferings(),
            'describeReservedElasticsearchInstances' => $this->describeReservedElasticsearchInstances(),
            'describeVpcEndpoints' => $this->describeVpcEndpoints(),
            'dissociatePackage' => $this->dissociatePackage(),
            'getCompatibleElasticsearchVersions' => $this->getCompatibleElasticsearchVersions(),
            'getPackageVersionHistory' => $this->getPackageVersionHistory(),
            'getUpgradeHistory' => $this->getUpgradeHistory(),
            'getUpgradeStatus' => $this->getUpgradeStatus(),
            'listDomainNames' => $this->listDomainNames(),
            'listDomainsForPackage' => $this->listDomainsForPackage(),
            'listElasticsearchInstanceTypes' => $this->listElasticsearchInstanceTypes(),
            'listElasticsearchVersions' => $this->listElasticsearchVersions(),
            'listPackagesForDomain' => $this->listPackagesForDomain(),
            'listTags' => $this->listTags(),
            'listVpcEndpointAccess' => $this->listVpcEndpointAccess(),
            'listVpcEndpoints' => $this->listVpcEndpoints(),
            'listVpcEndpointsForDomain' => $this->listVpcEndpointsForDomain(),
            'purchaseReservedElasticsearchInstanceOffering' => $this->purchaseReservedElasticsearchInstanceOffering(),
            'rejectInboundCrossClusterSearchConnection' => $this->rejectInboundCrossClusterSearchConnection(),
            'removeTags' => $this->removeTags(),
            'revokeVpcEndpointAccess' => $this->revokeVpcEndpointAccess(),
            'startElasticsearchServiceSoftwareUpdate' => $this->startElasticsearchServiceSoftwareUpdate(),
            'updateElasticsearchDomainConfig' => $this->updateElasticsearchDomainConfig(),
            'updatePackage' => $this->updatePackage(),
            'updateVpcEndpoint' => $this->updateVpcEndpoint(),
            'upgradeElasticsearchDomain' => $this->upgradeElasticsearchDomain(),
        };
    }
    private function acceptInboundCrossClusterSearchConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function associatePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainPackageDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainPackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferencePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function authorizeVpcEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizedPrincipal'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function cancelDomainConfigChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DryRun'),
                new \PHPStan\Type\Constant\ConstantStringType('CancelledChangeIds'),
                new \PHPStan\Type\Constant\ConstantStringType('CancelledChangeProperties'),
            ], [
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PropertyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CancelledValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function cancelElasticsearchServiceSoftwareUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ELIGIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createElasticsearchDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpgradeProcessing'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CognitoOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainProcessingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColdStorageOptions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBSEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                            new \PHPStan\Type\Constant\ConstantStringType('io1'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotStartHour'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEX_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEARCH_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES_APPLICATION_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUDIT_LOGS'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_ELIGIBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-PFS-2023-10'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAMLOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthDisableDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Idp'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('RolesKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetadataContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Modifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradingEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatingServiceSoftware'),
                        new \PHPStan\Type\Constant\ConstantStringType('Isolated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRINGIFIED_JSON'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createOutboundCrossClusterSearchConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionAlias'),
                new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PackageDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailablePackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createVpcEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteElasticsearchDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpgradeProcessing'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CognitoOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainProcessingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColdStorageOptions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBSEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                            new \PHPStan\Type\Constant\ConstantStringType('io1'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotStartHour'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEX_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEARCH_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES_APPLICATION_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUDIT_LOGS'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_ELIGIBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-PFS-2023-10'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAMLOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthDisableDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Idp'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('RolesKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetadataContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Modifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradingEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatingServiceSoftware'),
                        new \PHPStan\Type\Constant\ConstantStringType('Isolated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRINGIFIED_JSON'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteElasticsearchServiceRole(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteInboundCrossClusterSearchConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteOutboundCrossClusterSearchConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deletePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PackageDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailablePackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteVpcEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeDomainAutoTunes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AutoTunes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED_ACTION'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ScheduledAutoTuneDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Date'),
                            new \PHPStan\Type\Constant\ConstantStringType('ActionType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Action'),
                            new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('JVM_HEAP_SIZE_TUNING'),
                                new \PHPStan\Type\Constant\ConstantStringType('JVM_YOUNG_GEN_TUNING'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LOW'),
                                new \PHPStan\Type\Constant\ConstantStringType('MEDIUM'),
                                new \PHPStan\Type\Constant\ConstantStringType('HIGH'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDomainChangeProgress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PendingProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompletedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('TotalNumberOfStages'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressStages'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeElasticsearchDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpgradeProcessing'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CognitoOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainProcessingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColdStorageOptions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBSEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                            new \PHPStan\Type\Constant\ConstantStringType('io1'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotStartHour'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEX_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEARCH_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES_APPLICATION_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUDIT_LOGS'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_ELIGIBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-PFS-2023-10'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAMLOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthDisableDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Idp'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('RolesKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetadataContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Modifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradingEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatingServiceSoftware'),
                        new \PHPStan\Type\Constant\ConstantStringType('Isolated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRINGIFIED_JSON'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeElasticsearchDomainConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CognitoOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColdStorageOptions'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EBSEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotStartHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INDEX_SLOW_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEARCH_SLOW_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ES_APPLICATION_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUDIT_LOGS'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-PFS-2023-10'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMLOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthDisableDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Idp'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubjectKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RolesKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutMinutes'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetadataContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackOnDisable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaintenanceSchedules'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ROLLBACK'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ROLLBACK'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CronExpressionForRecurrence'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRINGIFIED_JSON'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describeElasticsearchDomains(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainStatusList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Created'),
                    new \PHPStan\Type\Constant\ConstantStringType('Deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpgradeProcessing'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CognitoOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainProcessingStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('ColdStorageOptions'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                            new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EBSEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                        new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                        new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('standard'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                            new \PHPStan\Type\Constant\ConstantStringType('io1'),
                            new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotStartHour'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INDEX_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SEARCH_SLOW_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ES_APPLICATION_LOGS'),
                        new \PHPStan\Type\Constant\ConstantStringType('AUDIT_LOGS'),
                    ]), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_ELIGIBLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                            new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-PFS-2023-10'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('SAMLOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthDisableDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthEnabled'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('Idp'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubjectKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('RolesKey'),
                            new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MetadataContent'),
                                new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Creating'),
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                        new \PHPStan\Type\Constant\ConstantStringType('Modifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradingEngineVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatingServiceSoftware'),
                        new \PHPStan\Type\Constant\ConstantStringType('Isolated'),
                        new \PHPStan\Type\Constant\ConstantStringType('Deleting'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRINGIFIED_JSON'),
                        ]),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeElasticsearchInstanceTypeLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LimitsByRole'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StorageTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceLimits'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdditionalLimits'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StorageTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageSubTypeName'),
                        new \PHPStan\Type\Constant\ConstantStringType('StorageTypeLimits'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LimitName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LimitValues'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceCountLimits'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MinimumInstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaximumInstanceCount'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LimitName'),
                        new \PHPStan\Type\Constant\ConstantStringType('LimitValues'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeInboundCrossClusterSearchConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeOutboundCrossClusterSearchConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROVISIONING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PackageDetailsList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailablePackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeReservedElasticsearchInstanceOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedElasticsearchInstanceOfferings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedElasticsearchInstanceOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeReservedElasticsearchInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservedElasticsearchInstances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedElasticsearchInstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservedElasticsearchInstanceOfferingId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchInstanceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('FixedPrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsagePrice'),
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchInstanceCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('PaymentOption'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecurringCharges'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ALL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_UPFRONT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NO_UPFRONT'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeAmount'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecurringChargeFrequency'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeVpcEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoints'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointErrors'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENDPOINT_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVER_ERROR'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function dissociatePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainPackageDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainPackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferencePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getCompatibleElasticsearchVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CompatibleElasticsearchVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetVersions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function getPackageVersionHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                new \PHPStan\Type\Constant\ConstantStringType('PackageVersionHistoryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CommitMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUpgradeHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpgradeHistories'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UpgradeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpgradeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StepsList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED_WITH_ISSUES'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradeStep'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpgradeStepStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Issues'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgressPercent'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRE_UPGRADE_CHECK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPGRADE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED_WITH_ISSUES'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\FloatType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUpgradeStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('UpgradeStep'),
                new \PHPStan\Type\Constant\ConstantStringType('StepStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('UpgradeName'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_UPGRADE_CHECK'),
                    new \PHPStan\Type\Constant\ConstantStringType('SNAPSHOT'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPGRADE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED_WITH_ISSUES'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDomainNames(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainNames'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EngineType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OpenSearch'),
                        new \PHPStan\Type\Constant\ConstantStringType('Elasticsearch'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listDomainsForPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainPackageDetailsList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainPackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferencePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listElasticsearchInstanceTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchInstanceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                    new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listElasticsearchVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPackagesForDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainPackageDetailsList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainPackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReferencePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASSOCIATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISSOCIATION_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listVpcEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AuthorizedPrincipalList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Principal'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_SERVICE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVpcEndpoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVpcEndpointsForDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function purchaseReservedElasticsearchInstanceOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReservedElasticsearchInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('ReservationName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rejectInboundCrossClusterSearchConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SourceDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationDomainInfo'),
                    new \PHPStan\Type\Constant\ConstantStringType('CrossClusterSearchConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StatusCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('APPROVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function removeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function revokeVpcEndpointAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function startElasticsearchServiceSoftwareUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceSoftwareOptions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('NewVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateAvailable'),
                    new \PHPStan\Type\Constant\ConstantStringType('Cancellable'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedUpdateDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('OptionalDeployment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_ELIGIBLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ELIGIBLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function updateElasticsearchDomainConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('DryRunResults'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ElasticsearchClusterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('EBSOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPolicies'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnapshotOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CognitoOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('EncryptionAtRestOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('NodeToNodeEncryptionOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogPublishingOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainEndpointOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdvancedSecurityOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoTuneOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModifyingProperties'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('InstanceCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('ZoneAwarenessConfig'),
                            new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterType'),
                            new \PHPStan\Type\Constant\ConstantStringType('DedicatedMasterCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmType'),
                            new \PHPStan\Type\Constant\ConstantStringType('WarmCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('ColdStorageOptions'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZoneCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('m3.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m4.10xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('m5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r5.12xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.9xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c5.18xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.micro.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.small.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('t2.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('d2.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('c4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('r4.16xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.large.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.2xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.4xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.8xlarge.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('i3.16xlarge.elasticsearch'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.medium.elasticsearch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ultrawarm1.large.elasticsearch'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EBSEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('VolumeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('Iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('Throughput'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AutomatedSnapshotStartHour'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('UserPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('IdentityPoolId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INDEX_SLOW_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEARCH_SLOW_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('ES_APPLICATION_LOGS'),
                            new \PHPStan\Type\Constant\ConstantStringType('AUDIT_LOGS'),
                        ]), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EnforceHTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSSecurityPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomEndpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('CustomEndpointCertificateArn'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-0-2019-07'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-2019-07'),
                                new \PHPStan\Type\Constant\ConstantStringType('Policy-Min-TLS-1-2-PFS-2023-10'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalUserDatabaseEnabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('SAMLOptions'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthDisableDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('AnonymousAuthEnabled'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('Idp'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubjectKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('RolesKey'),
                                new \PHPStan\Type\Constant\ConstantStringType('SessionTimeoutMinutes'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MetadataContent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EntityId'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresIndexDocuments'),
                                new \PHPStan\Type\Constant\ConstantStringType('Processing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Active'),
                            ]),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Options'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
                            new \PHPStan\Type\Constant\ConstantStringType('RollbackOnDisable'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaintenanceSchedules'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ROLLBACK'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEFAULT_ROLLBACK'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartAt'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CronExpressionForRecurrence'),
                            ], [
                                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\Constant\ConstantStringType('HOURS'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreationDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateDate'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('State'),
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingDeletion'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                new \PHPStan\Type\Constant\ConstantStringType('ENABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_SCHEDULED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_COMPLETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLED_AND_ROLLBACK_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                            new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                            new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                            new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                            new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActiveValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValueType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PLAIN_TEXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('STRINGIFIED_JSON'),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updatePackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PackageDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PackageID'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PackageStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailablePackageVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT-DICTIONARY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('COPYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COPY_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateVpcEndpoint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcEndpoint'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointId'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcEndpointOwner'),
                    new \PHPStan\Type\Constant\ConstantStringType('DomainArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Endpoint'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZones'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function upgradeElasticsearchDomain(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DomainName'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('PerformCheckOnly'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeProgressDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConfigChangeStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('InitiatedBy'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('Initializing'),
                        new \PHPStan\Type\Constant\ConstantStringType('Validating'),
                        new \PHPStan\Type\Constant\ConstantStringType('ValidationFailed'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplyingChanges'),
                        new \PHPStan\Type\Constant\ConstantStringType('Completed'),
                        new \PHPStan\Type\Constant\ConstantStringType('PendingUserInput'),
                        new \PHPStan\Type\Constant\ConstantStringType('Cancelled'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
            ]),
        ]);
    }
}