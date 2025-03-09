<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class DirectConnectClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\DirectConnect\DirectConnectClient>
     */
    public function getClass(): string
    {
        return \Aws\DirectConnect\DirectConnectClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptDirectConnectGatewayAssociationProposal',
            'allocateConnectionOnInterconnect',
            'allocateHostedConnection',
            'allocatePrivateVirtualInterface',
            'allocatePublicVirtualInterface',
            'allocateTransitVirtualInterface',
            'associateConnectionWithLag',
            'associateHostedConnection',
            'associateMacSecKey',
            'associateVirtualInterface',
            'confirmConnection',
            'confirmCustomerAgreement',
            'confirmPrivateVirtualInterface',
            'confirmPublicVirtualInterface',
            'confirmTransitVirtualInterface',
            'createBGPPeer',
            'createConnection',
            'createDirectConnectGateway',
            'createDirectConnectGatewayAssociation',
            'createDirectConnectGatewayAssociationProposal',
            'createInterconnect',
            'createLag',
            'createPrivateVirtualInterface',
            'createPublicVirtualInterface',
            'createTransitVirtualInterface',
            'deleteBGPPeer',
            'deleteConnection',
            'deleteDirectConnectGateway',
            'deleteDirectConnectGatewayAssociation',
            'deleteDirectConnectGatewayAssociationProposal',
            'deleteInterconnect',
            'deleteLag',
            'deleteVirtualInterface',
            'describeConnectionLoa',
            'describeConnections',
            'describeConnectionsOnInterconnect',
            'describeCustomerMetadata',
            'describeDirectConnectGatewayAssociationProposals',
            'describeDirectConnectGatewayAssociations',
            'describeDirectConnectGatewayAttachments',
            'describeDirectConnectGateways',
            'describeHostedConnections',
            'describeInterconnectLoa',
            'describeInterconnects',
            'describeLags',
            'describeLoa',
            'describeLocations',
            'describeRouterConfiguration',
            'describeTags',
            'describeVirtualGateways',
            'describeVirtualInterfaces',
            'disassociateConnectionFromLag',
            'disassociateMacSecKey',
            'listVirtualInterfaceTestHistory',
            'startBgpFailoverTest',
            'stopBgpFailoverTest',
            'tagResource',
            'untagResource',
            'updateConnection',
            'updateDirectConnectGateway',
            'updateDirectConnectGatewayAssociation',
            'updateLag',
            'updateVirtualInterfaceAttributes',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptDirectConnectGatewayAssociationProposal' => $this->acceptDirectConnectGatewayAssociationProposal(),
            'allocateConnectionOnInterconnect' => $this->allocateConnectionOnInterconnect(),
            'allocateHostedConnection' => $this->allocateHostedConnection(),
            'allocatePrivateVirtualInterface' => $this->allocatePrivateVirtualInterface(),
            'allocatePublicVirtualInterface' => $this->allocatePublicVirtualInterface(),
            'allocateTransitVirtualInterface' => $this->allocateTransitVirtualInterface(),
            'associateConnectionWithLag' => $this->associateConnectionWithLag(),
            'associateHostedConnection' => $this->associateHostedConnection(),
            'associateMacSecKey' => $this->associateMacSecKey(),
            'associateVirtualInterface' => $this->associateVirtualInterface(),
            'confirmConnection' => $this->confirmConnection(),
            'confirmCustomerAgreement' => $this->confirmCustomerAgreement(),
            'confirmPrivateVirtualInterface' => $this->confirmPrivateVirtualInterface(),
            'confirmPublicVirtualInterface' => $this->confirmPublicVirtualInterface(),
            'confirmTransitVirtualInterface' => $this->confirmTransitVirtualInterface(),
            'createBGPPeer' => $this->createBGPPeer(),
            'createConnection' => $this->createConnection(),
            'createDirectConnectGateway' => $this->createDirectConnectGateway(),
            'createDirectConnectGatewayAssociation' => $this->createDirectConnectGatewayAssociation(),
            'createDirectConnectGatewayAssociationProposal' => $this->createDirectConnectGatewayAssociationProposal(),
            'createInterconnect' => $this->createInterconnect(),
            'createLag' => $this->createLag(),
            'createPrivateVirtualInterface' => $this->createPrivateVirtualInterface(),
            'createPublicVirtualInterface' => $this->createPublicVirtualInterface(),
            'createTransitVirtualInterface' => $this->createTransitVirtualInterface(),
            'deleteBGPPeer' => $this->deleteBGPPeer(),
            'deleteConnection' => $this->deleteConnection(),
            'deleteDirectConnectGateway' => $this->deleteDirectConnectGateway(),
            'deleteDirectConnectGatewayAssociation' => $this->deleteDirectConnectGatewayAssociation(),
            'deleteDirectConnectGatewayAssociationProposal' => $this->deleteDirectConnectGatewayAssociationProposal(),
            'deleteInterconnect' => $this->deleteInterconnect(),
            'deleteLag' => $this->deleteLag(),
            'deleteVirtualInterface' => $this->deleteVirtualInterface(),
            'describeConnectionLoa' => $this->describeConnectionLoa(),
            'describeConnections' => $this->describeConnections(),
            'describeConnectionsOnInterconnect' => $this->describeConnectionsOnInterconnect(),
            'describeCustomerMetadata' => $this->describeCustomerMetadata(),
            'describeDirectConnectGatewayAssociationProposals' => $this->describeDirectConnectGatewayAssociationProposals(),
            'describeDirectConnectGatewayAssociations' => $this->describeDirectConnectGatewayAssociations(),
            'describeDirectConnectGatewayAttachments' => $this->describeDirectConnectGatewayAttachments(),
            'describeDirectConnectGateways' => $this->describeDirectConnectGateways(),
            'describeHostedConnections' => $this->describeHostedConnections(),
            'describeInterconnectLoa' => $this->describeInterconnectLoa(),
            'describeInterconnects' => $this->describeInterconnects(),
            'describeLags' => $this->describeLags(),
            'describeLoa' => $this->describeLoa(),
            'describeLocations' => $this->describeLocations(),
            'describeRouterConfiguration' => $this->describeRouterConfiguration(),
            'describeTags' => $this->describeTags(),
            'describeVirtualGateways' => $this->describeVirtualGateways(),
            'describeVirtualInterfaces' => $this->describeVirtualInterfaces(),
            'disassociateConnectionFromLag' => $this->disassociateConnectionFromLag(),
            'disassociateMacSecKey' => $this->disassociateMacSecKey(),
            'listVirtualInterfaceTestHistory' => $this->listVirtualInterfaceTestHistory(),
            'startBgpFailoverTest' => $this->startBgpFailoverTest(),
            'stopBgpFailoverTest' => $this->stopBgpFailoverTest(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateConnection' => $this->updateConnection(),
            'updateDirectConnectGateway' => $this->updateDirectConnectGateway(),
            'updateDirectConnectGatewayAssociation' => $this->updateDirectConnectGatewayAssociation(),
            'updateLag' => $this->updateLag(),
            'updateVirtualInterfaceAttributes' => $this->updateVirtualInterfaceAttributes(),
        };
    }
    private function acceptDirectConnectGatewayAssociationProposal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedCoreNetwork'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayOwnerAccount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociated'),
                        new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function allocateConnectionOnInterconnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function allocateHostedConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function allocatePrivateVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('asn'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('up'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function allocatePublicVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('asn'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('up'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function allocateTransitVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterface'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('asn'),
                        new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('up'),
                            new \PHPStan\Type\Constant\ConstantStringType('down'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function associateConnectionWithLag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function associateHostedConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function associateMacSecKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function associateVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('asn'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('up'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function confirmConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
            ]),
        ]);
    }
    private function confirmCustomerAgreement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function confirmPrivateVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
            ]),
        ]);
    }
    private function confirmPublicVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
            ]),
        ]);
    }
    private function confirmTransitVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
            ]),
        ]);
    }
    private function createBGPPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterface'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('asn'),
                        new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('up'),
                            new \PHPStan\Type\Constant\ConstantStringType('down'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function createConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createDirectConnectGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDirectConnectGatewayAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedCoreNetwork'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayOwnerAccount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociated'),
                        new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDirectConnectGatewayAssociationProposal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociationProposal'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('proposalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('proposalState'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('existingAllowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAllowedPrefixesToDirectConnectGateway'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function createInterconnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('interconnectId'),
                new \PHPStan\Type\Constant\ConstantStringType('interconnectName'),
                new \PHPStan\Type\Constant\ConstantStringType('interconnectState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionsBandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('lagName'),
                new \PHPStan\Type\Constant\ConstantStringType('lagState'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('connections'),
                new \PHPStan\Type\Constant\ConstantStringType('allowsHostedConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function createPrivateVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('asn'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('up'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createPublicVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('asn'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('up'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function createTransitVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterface'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('asn'),
                        new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('up'),
                            new \PHPStan\Type\Constant\ConstantStringType('down'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function deleteBGPPeer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterface'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('asn'),
                        new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('up'),
                            new \PHPStan\Type\Constant\ConstantStringType('down'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function deleteConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteDirectConnectGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDirectConnectGatewayAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedCoreNetwork'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayOwnerAccount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociated'),
                        new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDirectConnectGatewayAssociationProposal(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociationProposal'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('proposalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('proposalState'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('existingAllowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAllowedPrefixesToDirectConnectGateway'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function deleteInterconnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('interconnectState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
            ]),
        ]);
    }
    private function deleteLag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionsBandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('lagName'),
                new \PHPStan\Type\Constant\ConstantStringType('lagState'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('connections'),
                new \PHPStan\Type\Constant\ConstantStringType('allowsHostedConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function deleteVirtualInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
            ]),
        ]);
    }
    private function describeConnectionLoa(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('loa'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('loaContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaContentType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('application/pdf'),
                ]),
            ]),
        ]);
    }
    private function describeConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connections'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeConnectionsOnInterconnect(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connections'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeCustomerMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agreements'),
                new \PHPStan\Type\Constant\ConstantStringType('nniPartnerType'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('agreementName'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('v1'),
                    new \PHPStan\Type\Constant\ConstantStringType('v2'),
                    new \PHPStan\Type\Constant\ConstantStringType('nonPartner'),
                ]),
            ]),
        ]);
    }
    private function describeDirectConnectGatewayAssociationProposals(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociationProposals'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('proposalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('proposalState'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('existingAllowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAllowedPrefixesToDirectConnectGateway'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('accepted'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDirectConnectGatewayAssociations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedCoreNetwork'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayOwnerAccount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociated'),
                        new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDirectConnectGatewayAttachments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAttachments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('attachmentType'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('attaching'),
                        new \PHPStan\Type\Constant\ConstantStringType('attached'),
                        new \PHPStan\Type\Constant\ConstantStringType('detaching'),
                        new \PHPStan\Type\Constant\ConstantStringType('detached'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TransitVirtualInterface'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateVirtualInterface'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeDirectConnectGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGateways'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeHostedConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connections'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeInterconnectLoa(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('loa'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('loaContent'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaContentType'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('application/pdf'),
                ]),
            ]),
        ]);
    }
    private function describeInterconnects(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('interconnects'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('interconnectId'),
                    new \PHPStan\Type\Constant\ConstantStringType('interconnectName'),
                    new \PHPStan\Type\Constant\ConstantStringType('interconnectState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeLags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('connectionsBandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('numberOfConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagState'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('minimumLinks'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowsHostedConnections'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('location'),
                        new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                        new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                        new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                        new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                        new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                        new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                            new \PHPStan\Type\Constant\ConstantStringType('requested'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('down'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                            new \PHPStan\Type\Constant\ConstantStringType('yes'),
                            new \PHPStan\Type\Constant\ConstantStringType('no'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                            new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeLoa(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('loaContent'),
                new \PHPStan\Type\Constant\ConstantStringType('loaContentType'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('application/pdf'),
            ]),
        ]);
    }
    private function describeLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('locations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('locationCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('locationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('availablePortSpeeds'),
                    new \PHPStan\Type\Constant\ConstantStringType('availableProviders'),
                    new \PHPStan\Type\Constant\ConstantStringType('availableMacSecPortSpeeds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function describeRouterConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('router'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vendor'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('software'),
                    new \PHPStan\Type\Constant\ConstantStringType('xsltTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('xsltTemplateNameForMacSec'),
                    new \PHPStan\Type\Constant\ConstantStringType('routerTypeIdentifier'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeTags(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
            ]),
        ]);
    }
    private function describeVirtualGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualGateways'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeVirtualInterfaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaces'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                        new \PHPStan\Type\Constant\ConstantStringType('asn'),
                        new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                        new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                        new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                        new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                            new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                            new \PHPStan\Type\Constant\ConstantStringType('pending'),
                            new \PHPStan\Type\Constant\ConstantStringType('available'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('up'),
                            new \PHPStan\Type\Constant\ConstantStringType('down'),
                            new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function disassociateConnectionFromLag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function disassociateMacSecKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listVirtualInterfaceTestHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceTestHistory'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('testId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('testDurationInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startBgpFailoverTest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceTest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('testId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('testDurationInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function stopBgpFailoverTest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceTest'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('testId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('testDurationInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateDirectConnectGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateDirectConnectGatewayAssociation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayAssociation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayOwnerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('stateChangeError'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('allowedPrefixesToDirectConnectGateway'),
                    new \PHPStan\Type\Constant\ConstantStringType('associatedCoreNetwork'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayOwnerAccount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('associating'),
                        new \PHPStan\Type\Constant\ConstantStringType('associated'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociating'),
                        new \PHPStan\Type\Constant\ConstantStringType('disassociated'),
                        new \PHPStan\Type\Constant\ConstantStringType('updating'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('virtualPrivateGateway'),
                            new \PHPStan\Type\Constant\ConstantStringType('transitGateway'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                        new \PHPStan\Type\Constant\ConstantStringType('attachmentId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateLag(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectionsBandwidth'),
                new \PHPStan\Type\Constant\ConstantStringType('numberOfConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('lagName'),
                new \PHPStan\Type\Constant\ConstantStringType('lagState'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumLinks'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('connections'),
                new \PHPStan\Type\Constant\ConstantStringType('allowsHostedConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('requested'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionState'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('location'),
                    new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                    new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('partnerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('loaIssueTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lagId'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDevice'),
                    new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('hasLogicalRedundancy'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('providerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecCapable'),
                    new \PHPStan\Type\Constant\ConstantStringType('portEncryptionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('macSecKeys'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ordering'),
                        new \PHPStan\Type\Constant\ConstantStringType('requested'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                        new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                        new \PHPStan\Type\Constant\ConstantStringType('yes'),
                        new \PHPStan\Type\Constant\ConstantStringType('no'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                        new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                        new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    new \PHPStan\Type\Constant\ConstantStringType('yes'),
                    new \PHPStan\Type\Constant\ConstantStringType('no'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('secretARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ckn'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startOn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function updateVirtualInterfaceAttributes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ownerAccount'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('location'),
                new \PHPStan\Type\Constant\ConstantStringType('connectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('vlan'),
                new \PHPStan\Type\Constant\ConstantStringType('asn'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonSideAsn'),
                new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualInterfaceState'),
                new \PHPStan\Type\Constant\ConstantStringType('customerRouterConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                new \PHPStan\Type\Constant\ConstantStringType('jumboFrameCapable'),
                new \PHPStan\Type\Constant\ConstantStringType('virtualGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('directConnectGatewayId'),
                new \PHPStan\Type\Constant\ConstantStringType('routeFilterPrefixes'),
                new \PHPStan\Type\Constant\ConstantStringType('bgpPeers'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('siteLinkEnabled'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                    new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('confirming'),
                    new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                    new \PHPStan\Type\Constant\ConstantStringType('pending'),
                    new \PHPStan\Type\Constant\ConstantStringType('available'),
                    new \PHPStan\Type\Constant\ConstantStringType('down'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                    new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    new \PHPStan\Type\Constant\ConstantStringType('rejected'),
                    new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('cidr'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('asn'),
                    new \PHPStan\Type\Constant\ConstantStringType('authKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('addressFamily'),
                    new \PHPStan\Type\Constant\ConstantStringType('amazonAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('customerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpPeerState'),
                    new \PHPStan\Type\Constant\ConstantStringType('bgpStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsDeviceV2'),
                    new \PHPStan\Type\Constant\ConstantStringType('awsLogicalDeviceId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ipv4'),
                        new \PHPStan\Type\Constant\ConstantStringType('ipv6'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('verifying'),
                        new \PHPStan\Type\Constant\ConstantStringType('pending'),
                        new \PHPStan\Type\Constant\ConstantStringType('available'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('up'),
                        new \PHPStan\Type\Constant\ConstantStringType('down'),
                        new \PHPStan\Type\Constant\ConstantStringType('unknown'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
}