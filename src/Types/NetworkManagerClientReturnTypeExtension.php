<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class NetworkManagerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\NetworkManager\NetworkManagerClient>
     */
    public function getClass(): string
    {
        return \Aws\NetworkManager\NetworkManagerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptAttachment',
            'associateConnectPeer',
            'associateCustomerGateway',
            'associateLink',
            'associateTransitGatewayConnectPeer',
            'createConnectAttachment',
            'createConnectPeer',
            'createConnection',
            'createCoreNetwork',
            'createDevice',
            'createDirectConnectGatewayAttachment',
            'createGlobalNetwork',
            'createLink',
            'createSite',
            'createSiteToSiteVpnAttachment',
            'createTransitGatewayPeering',
            'createTransitGatewayRouteTableAttachment',
            'createVpcAttachment',
            'deleteAttachment',
            'deleteConnectPeer',
            'deleteConnection',
            'deleteCoreNetwork',
            'deleteCoreNetworkPolicyVersion',
            'deleteDevice',
            'deleteGlobalNetwork',
            'deleteLink',
            'deletePeering',
            'deleteResourcePolicy',
            'deleteSite',
            'deregisterTransitGateway',
            'describeGlobalNetworks',
            'disassociateConnectPeer',
            'disassociateCustomerGateway',
            'disassociateLink',
            'disassociateTransitGatewayConnectPeer',
            'executeCoreNetworkChangeSet',
            'getConnectAttachment',
            'getConnectPeer',
            'getConnectPeerAssociations',
            'getConnections',
            'getCoreNetwork',
            'getCoreNetworkChangeEvents',
            'getCoreNetworkChangeSet',
            'getCoreNetworkPolicy',
            'getCustomerGatewayAssociations',
            'getDevices',
            'getDirectConnectGatewayAttachment',
            'getLinkAssociations',
            'getLinks',
            'getNetworkResourceCounts',
            'getNetworkResourceRelationships',
            'getNetworkResources',
            'getNetworkRoutes',
            'getNetworkTelemetry',
            'getResourcePolicy',
            'getRouteAnalysis',
            'getSiteToSiteVpnAttachment',
            'getSites',
            'getTransitGatewayConnectPeerAssociations',
            'getTransitGatewayPeering',
            'getTransitGatewayRegistrations',
            'getTransitGatewayRouteTableAttachment',
            'getVpcAttachment',
            'listAttachments',
            'listConnectPeers',
            'listCoreNetworkPolicyVersions',
            'listCoreNetworks',
            'listOrganizationServiceAccessStatus',
            'listPeerings',
            'listTagsForResource',
            'putCoreNetworkPolicy',
            'putResourcePolicy',
            'registerTransitGateway',
            'rejectAttachment',
            'restoreCoreNetworkPolicyVersion',
            'startOrganizationServiceAccessUpdate',
            'startRouteAnalysis',
            'tagResource',
            'untagResource',
            'updateConnection',
            'updateCoreNetwork',
            'updateDevice',
            'updateDirectConnectGatewayAttachment',
            'updateGlobalNetwork',
            'updateLink',
            'updateNetworkResourceMetadata',
            'updateSite',
            'updateVpcAttachment',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptAttachment' => $this->acceptAttachment(),
            'associateConnectPeer' => $this->associateConnectPeer(),
            'associateCustomerGateway' => $this->associateCustomerGateway(),
            'associateLink' => $this->associateLink(),
            'associateTransitGatewayConnectPeer' => $this->associateTransitGatewayConnectPeer(),
            'createConnectAttachment' => $this->createConnectAttachment(),
            'createConnectPeer' => $this->createConnectPeer(),
            'createConnection' => $this->createConnection(),
            'createCoreNetwork' => $this->createCoreNetwork(),
            'createDevice' => $this->createDevice(),
            'createDirectConnectGatewayAttachment' => $this->createDirectConnectGatewayAttachment(),
            'createGlobalNetwork' => $this->createGlobalNetwork(),
            'createLink' => $this->createLink(),
            'createSite' => $this->createSite(),
            'createSiteToSiteVpnAttachment' => $this->createSiteToSiteVpnAttachment(),
            'createTransitGatewayPeering' => $this->createTransitGatewayPeering(),
            'createTransitGatewayRouteTableAttachment' => $this->createTransitGatewayRouteTableAttachment(),
            'createVpcAttachment' => $this->createVpcAttachment(),
            'deleteAttachment' => $this->deleteAttachment(),
            'deleteConnectPeer' => $this->deleteConnectPeer(),
            'deleteConnection' => $this->deleteConnection(),
            'deleteCoreNetwork' => $this->deleteCoreNetwork(),
            'deleteCoreNetworkPolicyVersion' => $this->deleteCoreNetworkPolicyVersion(),
            'deleteDevice' => $this->deleteDevice(),
            'deleteGlobalNetwork' => $this->deleteGlobalNetwork(),
            'deleteLink' => $this->deleteLink(),
            'deletePeering' => $this->deletePeering(),
            'deleteResourcePolicy' => $this->deleteResourcePolicy(),
            'deleteSite' => $this->deleteSite(),
            'deregisterTransitGateway' => $this->deregisterTransitGateway(),
            'describeGlobalNetworks' => $this->describeGlobalNetworks(),
            'disassociateConnectPeer' => $this->disassociateConnectPeer(),
            'disassociateCustomerGateway' => $this->disassociateCustomerGateway(),
            'disassociateLink' => $this->disassociateLink(),
            'disassociateTransitGatewayConnectPeer' => $this->disassociateTransitGatewayConnectPeer(),
            'executeCoreNetworkChangeSet' => $this->executeCoreNetworkChangeSet(),
            'getConnectAttachment' => $this->getConnectAttachment(),
            'getConnectPeer' => $this->getConnectPeer(),
            'getConnectPeerAssociations' => $this->getConnectPeerAssociations(),
            'getConnections' => $this->getConnections(),
            'getCoreNetwork' => $this->getCoreNetwork(),
            'getCoreNetworkChangeEvents' => $this->getCoreNetworkChangeEvents(),
            'getCoreNetworkChangeSet' => $this->getCoreNetworkChangeSet(),
            'getCoreNetworkPolicy' => $this->getCoreNetworkPolicy(),
            'getCustomerGatewayAssociations' => $this->getCustomerGatewayAssociations(),
            'getDevices' => $this->getDevices(),
            'getDirectConnectGatewayAttachment' => $this->getDirectConnectGatewayAttachment(),
            'getLinkAssociations' => $this->getLinkAssociations(),
            'getLinks' => $this->getLinks(),
            'getNetworkResourceCounts' => $this->getNetworkResourceCounts(),
            'getNetworkResourceRelationships' => $this->getNetworkResourceRelationships(),
            'getNetworkResources' => $this->getNetworkResources(),
            'getNetworkRoutes' => $this->getNetworkRoutes(),
            'getNetworkTelemetry' => $this->getNetworkTelemetry(),
            'getResourcePolicy' => $this->getResourcePolicy(),
            'getRouteAnalysis' => $this->getRouteAnalysis(),
            'getSiteToSiteVpnAttachment' => $this->getSiteToSiteVpnAttachment(),
            'getSites' => $this->getSites(),
            'getTransitGatewayConnectPeerAssociations' => $this->getTransitGatewayConnectPeerAssociations(),
            'getTransitGatewayPeering' => $this->getTransitGatewayPeering(),
            'getTransitGatewayRegistrations' => $this->getTransitGatewayRegistrations(),
            'getTransitGatewayRouteTableAttachment' => $this->getTransitGatewayRouteTableAttachment(),
            'getVpcAttachment' => $this->getVpcAttachment(),
            'listAttachments' => $this->listAttachments(),
            'listConnectPeers' => $this->listConnectPeers(),
            'listCoreNetworkPolicyVersions' => $this->listCoreNetworkPolicyVersions(),
            'listCoreNetworks' => $this->listCoreNetworks(),
            'listOrganizationServiceAccessStatus' => $this->listOrganizationServiceAccessStatus(),
            'listPeerings' => $this->listPeerings(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putCoreNetworkPolicy' => $this->putCoreNetworkPolicy(),
            'putResourcePolicy' => $this->putResourcePolicy(),
            'registerTransitGateway' => $this->registerTransitGateway(),
            'rejectAttachment' => $this->rejectAttachment(),
            'restoreCoreNetworkPolicyVersion' => $this->restoreCoreNetworkPolicyVersion(),
            'startOrganizationServiceAccessUpdate' => $this->startOrganizationServiceAccessUpdate(),
            'startRouteAnalysis' => $this->startRouteAnalysis(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateConnection' => $this->updateConnection(),
            'updateCoreNetwork' => $this->updateCoreNetwork(),
            'updateDevice' => $this->updateDevice(),
            'updateDirectConnectGatewayAttachment' => $this->updateDirectConnectGatewayAttachment(),
            'updateGlobalNetwork' => $this->updateGlobalNetwork(),
            'updateLink' => $this->updateLink(),
            'updateNetworkResourceMetadata' => $this->updateNetworkResourceMetadata(),
            'updateSite' => $this->updateSite(),
            'updateVpcAttachment' => $this->updateVpcAttachment(),
        };
    }
    private function acceptAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function associateConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function associateCustomerGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function associateLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LinkAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkAssociationState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function associateTransitGatewayConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayConnectPeerAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayConnectPeerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createConnectAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransportAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ENCAP'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('BgpConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ENCAP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAsn'),
                                new \PHPStan\Type\Constant\ConstantStringType('PeerAsn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PeerAddress'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_NO_FREE_IPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_OUTSIDE_SUBNET_CIDR_RANGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_INSIDE_CIDR_BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ASSOCIATED_CIDR_BLOCK'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createCoreNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Edges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSegments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendVia'),
                                new \PHPStan\Type\Constant\ConstantStringType('SendTo'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    new \PHPStan\Type\Constant\ConstantStringType('Model'),
                    new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Zone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createDirectConnectGatewayAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectConnectGatewayAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectConnectGatewayArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createGlobalNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Link'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UploadSpeed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DownloadSpeed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createSiteToSiteVpnAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SiteToSiteVpnAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpnConnectionArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createTransitGatewayPeering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayPeering'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Peering'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayPeeringAttachmentId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeeringId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeeringType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MissingPermissionsContext'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_PERMISSIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_TRANSIT_GATEWAY_STATE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MissingPermission'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createTransitGatewayRouteTableAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRouteTableAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeeringId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRouteTableArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createVpcAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Support'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplianceModeSupport'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('BgpConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ENCAP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAsn'),
                                new \PHPStan\Type\Constant\ConstantStringType('PeerAsn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PeerAddress'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_NO_FREE_IPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_OUTSIDE_SUBNET_CIDR_RANGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_INSIDE_CIDR_BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ASSOCIATED_CIDR_BLOCK'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteCoreNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Edges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSegments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendVia'),
                                new \PHPStan\Type\Constant\ConstantStringType('SendTo'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteCoreNetworkPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_TO_EXECUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_DATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    new \PHPStan\Type\Constant\ConstantStringType('Model'),
                    new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Zone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteGlobalNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Link'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UploadSpeed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DownloadSpeed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deletePeering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Peering'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeeringId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeeringType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            new \PHPStan\Type\Constant\ConstantStringType('MissingPermissionsContext'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('MISSING_PERMISSIONS'),
                                new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_TRANSIT_GATEWAY_STATE'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MissingPermission'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deregisterTransitGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRegistration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeGlobalNetworks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function disassociateConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disassociateCustomerGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disassociateLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LinkAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkAssociationState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function disassociateTransitGatewayConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayConnectPeerAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayConnectPeerArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function executeCoreNetworkChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getConnectAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransportAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ENCAP'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getConnectPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeer'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectAttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('BgpConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GRE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NO_ENCAP'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAsn'),
                                new \PHPStan\Type\Constant\ConstantStringType('PeerAsn'),
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAddress'),
                                new \PHPStan\Type\Constant\ConstantStringType('PeerAddress'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_NO_FREE_IPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('IP_OUTSIDE_SUBNET_CIDR_RANGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('INVALID_INSIDE_CIDR_BLOCK'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_ASSOCIATED_CIDR_BLOCK'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getConnectPeerAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connections'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectedDeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectedLinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCoreNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Edges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSegments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendVia'),
                                new \PHPStan\Type\Constant\ConstantStringType('SendTo'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getCoreNetworkChangeEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkChangeEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifierPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('EventTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('Values'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_SEGMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FUNCTION_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_MAPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_ROUTE_PROPAGATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_ROUTE_STATIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEGMENT_ACTIONS_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_POLICIES_CONFIGURATION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCoreNetworkChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkChanges'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('Identifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('PreviousValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('NewValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('IdentifierPath'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_SEGMENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FUNCTION_GROUP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_EDGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_MAPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_ROUTE_PROPAGATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_ROUTE_STATIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEGMENTS_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('SEGMENT_ACTIONS_CONFIGURATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('ATTACHMENT_POLICIES_CONFIGURATION'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSegments'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceInsertionActions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhenSentTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Via'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('send-via'),
                                        new \PHPStan\Type\Constant\ConstantStringType('send-to'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('dual-hop'),
                                        new \PHPStan\Type\Constant\ConstantStringType('single-hop'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('WhenSentToSegmentsList'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroups'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WithEdgeOverrides'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EdgeSets'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UseEdge'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Cidr'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSegments'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceInsertionActions'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Mode'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WhenSentTo'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Via'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('send-via'),
                                        new \PHPStan\Type\Constant\ConstantStringType('send-to'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('dual-hop'),
                                        new \PHPStan\Type\Constant\ConstantStringType('single-hop'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('WhenSentToSegmentsList'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\StringType(),
                                        ])),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroups'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WithEdgeOverrides'),
                                    ], [
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                            ], [
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('EdgeSets'),
                                                new \PHPStan\Type\Constant\ConstantStringType('UseEdge'),
                                            ], [
                                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                                        new \PHPStan\Type\StringType(),
                                                    ])),
                                                ])),
                                                new \PHPStan\Type\StringType(),
                                            ]),
                                        ])),
                                    ]),
                                ]),
                            ])),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCoreNetworkPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_TO_EXECUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_DATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCustomerGatewayAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CustomerGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Devices'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWSLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                        new \PHPStan\Type\Constant\ConstantStringType('Model'),
                        new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Zone'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                            new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDirectConnectGatewayAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectConnectGatewayAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectConnectGatewayArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getLinkAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LinkAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkAssociationState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getLinks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Links'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bandwidth'),
                        new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('UploadSpeed'),
                            new \PHPStan\Type\Constant\ConstantStringType('DownloadSpeed'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getNetworkResourceCounts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NetworkResourceCounts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getNetworkResourceRelationships(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Relationships'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('From'),
                        new \PHPStan\Type\Constant\ConstantStringType('To'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getNetworkResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NetworkResources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefinitionTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getNetworkRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RouteTableArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkSegmentEdge'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteTableType'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteTableTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('NetworkRoutes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CORE_NETWORK_SEGMENT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NETWORK_FUNCTION_GROUP'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destinations'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrefixListId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkAttachmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayAttachmentId'),
                                new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                                new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                                new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BLACKHOLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROPAGATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getNetworkTelemetry(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NetworkTelemetry'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegisteredGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AwsRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Health'),
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
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BGP'),
                                new \PHPStan\Type\Constant\ConstantStringType('IPSEC'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('UP'),
                                new \PHPStan\Type\Constant\ConstantStringType('DOWN'),
                            ]),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRouteAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RouteAnalysis'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteAnalysisId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeReturnPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseMiddleboxes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForwardPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReturnPath'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayAttachmentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayAttachmentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResultCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonContext'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CYCLIC_PATH_DETECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX_HOPS_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('POSSIBLE_MIDDLEBOX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_DESTINATION_ARN_PROVIDED'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sequence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredGatewayArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NameTag'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IsMiddlebox'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResultCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonContext'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CYCLIC_PATH_DETECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX_HOPS_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('POSSIBLE_MIDDLEBOX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_DESTINATION_ARN_PROVIDED'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sequence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredGatewayArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NameTag'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IsMiddlebox'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getSiteToSiteVpnAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('SiteToSiteVpnAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpnConnectionArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSites(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Sites'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Location'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                            new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                            new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTransitGatewayConnectPeerAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayConnectPeerAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayConnectPeerArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTransitGatewayPeering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayPeering'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Peering'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayPeeringAttachmentId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeeringId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeeringType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MissingPermissionsContext'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_PERMISSIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_TRANSIT_GATEWAY_STATE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MissingPermission'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTransitGatewayRegistrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRegistrations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTransitGatewayRouteTableAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRouteTableAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('PeeringId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRouteTableArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getVpcAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Support'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplianceModeSupport'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listAttachments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attachments'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConnectPeers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConnectPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectAttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectPeerState'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCoreNetworkPolicyVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkPolicyVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeSetState'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_GENERATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('READY_TO_EXECUTE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_DATE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCoreNetworks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationServiceAccessStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationAwsServiceAccessStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SLRDeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountStatusList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLRDeploymentStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPeerings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Peerings'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeeringId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PeeringType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                                new \PHPStan\Type\Constant\ConstantStringType('MissingPermissionsContext'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_PEERS_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MISSING_PERMISSIONS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_ERROR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EDGE_LOCATION_PEER_DUPLICATE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_TRANSIT_GATEWAY_STATE'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MissingPermission'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                        ])),
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
                new \PHPStan\Type\Constant\ConstantStringType('TagList'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putCoreNetworkPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_TO_EXECUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_DATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function putResourcePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerTransitGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayRegistration'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function rejectAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                        new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function restoreCoreNetworkPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetState'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('PolicyDocument'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LATEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_GENERATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('READY_TO_EXECUTE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUT_OF_DATE'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Message'),
                            new \PHPStan\Type\Constant\ConstantStringType('Path'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function startOrganizationServiceAccessUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationStatus'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationAwsServiceAccessStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('SLRDeploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountStatusList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SLRDeploymentStatus'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function startRouteAnalysis(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RouteAnalysis'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteAnalysisId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeReturnPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('UseMiddleboxes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForwardPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReturnPath'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayAttachmentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayAttachmentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TransitGatewayArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResultCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonContext'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CYCLIC_PATH_DETECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX_HOPS_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('POSSIBLE_MIDDLEBOX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_DESTINATION_ARN_PROVIDED'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sequence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredGatewayArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NameTag'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IsMiddlebox'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CompletionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Path'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ResultCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReasonContext'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('NOT_CONNECTED'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_NOT_IN_TRANSIT_GATEWAY'),
                                new \PHPStan\Type\Constant\ConstantStringType('CYCLIC_PATH_DETECTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_STABLE_ROUTE_TABLE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('ROUTE_NOT_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('BLACKHOLE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('INACTIVE_ROUTE_FOR_DESTINATION_FOUND'),
                                new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ATTACHMENT_ATTACH_ARN_NO_MATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('MAX_HOPS_EXCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('POSSIBLE_MIDDLEBOX'),
                                new \PHPStan\Type\Constant\ConstantStringType('NO_DESTINATION_ARN_PROVIDED'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Sequence'),
                                new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationCidrBlock'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RegisteredGatewayArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NameTag'),
                                    new \PHPStan\Type\Constant\ConstantStringType('IsMiddlebox'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
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
    private function updateConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectedLinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateCoreNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CoreNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroups'),
                    new \PHPStan\Type\Constant\ConstantStringType('Edges'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('SharedSegments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                            new \PHPStan\Type\Constant\ConstantStringType('Segments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('SendVia'),
                                new \PHPStan\Type\Constant\ConstantStringType('SendTo'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                            new \PHPStan\Type\Constant\ConstantStringType('Asn'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsideCidrBlocks'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Device'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWSLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Vendor'),
                    new \PHPStan\Type\Constant\ConstantStringType('Model'),
                    new \PHPStan\Type\Constant\ConstantStringType('SerialNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Zone'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateDirectConnectGatewayAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DirectConnectGatewayAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('DirectConnectGatewayArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateGlobalNetwork(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GlobalNetwork'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateLink(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Link'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LinkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('Provider'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UploadSpeed'),
                        new \PHPStan\Type\Constant\ConstantStringType('DownloadSpeed'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateNetworkResourceMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateSite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Site'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SiteId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SiteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GlobalNetworkId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Key'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function updateVpcAttachment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('VpcAttachment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CoreNetworkArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentType'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('EdgeLocations'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedSegmentChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProposedNetworkFunctionGroupChange'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('UpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModificationErrors'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONNECT'),
                            new \PHPStan\Type\Constant\ConstantStringType('SITE_TO_SITE_VPN'),
                            new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('TRANSIT_GATEWAY_ROUTE_TABLE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ATTACHMENT_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_NETWORK_UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_TAG_ACCEPTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('SegmentName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                            new \PHPStan\Type\Constant\ConstantStringType('AttachmentPolicyRuleNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkFunctionGroupName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Message'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequestId'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VPC_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_DUPLICATED_IN_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_FREE_ADDRESSES'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_UNSUPPORTED_AVAILABILITY_ZONE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SUBNET_NO_IPV6_CIDRS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VPN_CONNECTION_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MAXIMUM_NO_ENCAP_LIMIT_EXCEEDED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NOT_FOUND'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_EXISTING_ATTACHMENTS'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DIRECT_CONNECT_GATEWAY_NO_PRIVATE_VIF'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv6Support'),
                        new \PHPStan\Type\Constant\ConstantStringType('ApplianceModeSupport'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
            ]),
        ]);
    }
}