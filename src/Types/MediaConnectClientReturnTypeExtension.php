<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class MediaConnectClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\MediaConnect\MediaConnectClient>
     */
    public function getClass(): string
    {
        return \Aws\MediaConnect\MediaConnectClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'addBridgeOutputs',
            'addBridgeSources',
            'addFlowMediaStreams',
            'addFlowOutputs',
            'addFlowSources',
            'addFlowVpcInterfaces',
            'createBridge',
            'createFlow',
            'createGateway',
            'deleteBridge',
            'deleteFlow',
            'deleteGateway',
            'deregisterGatewayInstance',
            'describeBridge',
            'describeFlow',
            'describeFlowSourceMetadata',
            'describeFlowSourceThumbnail',
            'describeGateway',
            'describeGatewayInstance',
            'describeOffering',
            'describeReservation',
            'grantFlowEntitlements',
            'listBridges',
            'listEntitlements',
            'listFlows',
            'listGatewayInstances',
            'listGateways',
            'listOfferings',
            'listReservations',
            'listTagsForResource',
            'purchaseOffering',
            'removeBridgeOutput',
            'removeBridgeSource',
            'removeFlowMediaStream',
            'removeFlowOutput',
            'removeFlowSource',
            'removeFlowVpcInterface',
            'revokeFlowEntitlement',
            'startFlow',
            'stopFlow',
            'tagResource',
            'untagResource',
            'updateBridge',
            'updateBridgeOutput',
            'updateBridgeSource',
            'updateBridgeState',
            'updateFlow',
            'updateFlowEntitlement',
            'updateFlowMediaStream',
            'updateFlowOutput',
            'updateFlowSource',
            'updateGatewayInstance',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'addBridgeOutputs' => $this->addBridgeOutputs(),
            'addBridgeSources' => $this->addBridgeSources(),
            'addFlowMediaStreams' => $this->addFlowMediaStreams(),
            'addFlowOutputs' => $this->addFlowOutputs(),
            'addFlowSources' => $this->addFlowSources(),
            'addFlowVpcInterfaces' => $this->addFlowVpcInterfaces(),
            'createBridge' => $this->createBridge(),
            'createFlow' => $this->createFlow(),
            'createGateway' => $this->createGateway(),
            'deleteBridge' => $this->deleteBridge(),
            'deleteFlow' => $this->deleteFlow(),
            'deleteGateway' => $this->deleteGateway(),
            'deregisterGatewayInstance' => $this->deregisterGatewayInstance(),
            'describeBridge' => $this->describeBridge(),
            'describeFlow' => $this->describeFlow(),
            'describeFlowSourceMetadata' => $this->describeFlowSourceMetadata(),
            'describeFlowSourceThumbnail' => $this->describeFlowSourceThumbnail(),
            'describeGateway' => $this->describeGateway(),
            'describeGatewayInstance' => $this->describeGatewayInstance(),
            'describeOffering' => $this->describeOffering(),
            'describeReservation' => $this->describeReservation(),
            'grantFlowEntitlements' => $this->grantFlowEntitlements(),
            'listBridges' => $this->listBridges(),
            'listEntitlements' => $this->listEntitlements(),
            'listFlows' => $this->listFlows(),
            'listGatewayInstances' => $this->listGatewayInstances(),
            'listGateways' => $this->listGateways(),
            'listOfferings' => $this->listOfferings(),
            'listReservations' => $this->listReservations(),
            'listTagsForResource' => $this->listTagsForResource(),
            'purchaseOffering' => $this->purchaseOffering(),
            'removeBridgeOutput' => $this->removeBridgeOutput(),
            'removeBridgeSource' => $this->removeBridgeSource(),
            'removeFlowMediaStream' => $this->removeFlowMediaStream(),
            'removeFlowOutput' => $this->removeFlowOutput(),
            'removeFlowSource' => $this->removeFlowSource(),
            'removeFlowVpcInterface' => $this->removeFlowVpcInterface(),
            'revokeFlowEntitlement' => $this->revokeFlowEntitlement(),
            'startFlow' => $this->startFlow(),
            'stopFlow' => $this->stopFlow(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateBridge' => $this->updateBridge(),
            'updateBridgeOutput' => $this->updateBridgeOutput(),
            'updateBridgeSource' => $this->updateBridgeSource(),
            'updateBridgeState' => $this->updateBridgeState(),
            'updateFlow' => $this->updateFlow(),
            'updateFlowEntitlement' => $this->updateFlowEntitlement(),
            'updateFlowMediaStream' => $this->updateFlowMediaStream(),
            'updateFlowOutput' => $this->updateFlowOutput(),
            'updateFlowSource' => $this->updateFlowSource(),
            'updateGatewayInstance' => $this->updateGatewayInstance(),
        };
    }
    private function addBridgeOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowOutput'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkOutput'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlowSourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addBridgeSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Sources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlowVpcInterfaceAttachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MulticastIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addFlowMediaStreams(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MediaStreams'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClockRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fmt'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VideoFormat'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Fmtp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lang'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChannelOrder'),
                            new \PHPStan\Type\Constant\ConstantStringType('Colorimetry'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExactFramerate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Par'),
                            new \PHPStan\Type\Constant\ConstantStringType('Range'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScanMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tcs'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BT601'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT709'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2020'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2100'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST2065-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('XYZ'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NARROW'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULLPROTECT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('progressive'),
                                new \PHPStan\Type\Constant\ConstantStringType('interlace'),
                                new \PHPStan\Type\Constant\ConstantStringType('progressive-segmented-frame'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SDR'),
                                new \PHPStan\Type\Constant\ConstantStringType('PQ'),
                                new \PHPStan\Type\Constant\ConstantStringType('HLG'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2100LINPQ'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2100LINHLG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST428-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENSITY'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('video'),
                        new \PHPStan\Type\Constant\ConstantStringType('audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('ancillary-data'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function addFlowOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaLiveInputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamOutputConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgePorts'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputStatus'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('speke'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodingParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutboundIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                            new \PHPStan\Type\Constant\ConstantStringType('raw'),
                            new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                            new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncoderProfile'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('main'),
                                new \PHPStan\Type\Constant\ConstantStringType('high'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addFlowSources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Sources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('speke'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                            new \PHPStan\Type\Constant\ConstantStringType('raw'),
                            new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                            new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function addFlowVpcInterfaces(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaces'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ena'),
                        new \PHPStan\Type\Constant\ConstantStringType('efa'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createBridge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bridge'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeState'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressGatewayBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressGatewayBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceFailoverConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxOutputs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkOutput'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowSourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailoverMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePriority'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimarySource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowVpcInterfaceAttachment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Flow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceFailoverConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('Maintenance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMonitoringConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClockRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fmt'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VideoFormat'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fmtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lang'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ChannelOrder'),
                                new \PHPStan\Type\Constant\ConstantStringType('Colorimetry'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExactFramerate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Par'),
                                new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tcs'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BT601'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT709'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2020'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('XYZ'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NARROW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULLPROTECT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('progressive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interlace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('progressive-segmented-frame'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SDR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PQ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HLG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100LINPQ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100LINHLG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST428-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENSITY'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('video'),
                            new \PHPStan\Type\Constant\ConstantStringType('audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('ancillary-data'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaLiveInputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamOutputConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BridgePorts'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutboundIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFactor'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncoderProfile'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('main'),
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailoverMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePriority'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimarySource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ena'),
                            new \PHPStan\Type\Constant\ConstantStringType('efa'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDay'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDeadline'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceScheduledDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStartHour'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Monday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tuesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wednesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Thursday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Friday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Saturday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunday'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbnailState'),
                        new \PHPStan\Type\Constant\ConstantStringType('AudioMonitoringSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentQualityAnalysisState'),
                        new \PHPStan\Type\Constant\ConstantStringType('VideoMonitoringSettings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SilentAudio'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BlackFrames'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrozenFrames'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Gateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EgressCidrBlocks'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Networks'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteBridge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function deleteGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deregisterGatewayInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayInstanceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('InstanceState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                    new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEREGISTRATION_ERROR'),
                ]),
            ]),
        ]);
    }
    private function describeBridge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bridge'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeState'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressGatewayBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressGatewayBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceFailoverConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxOutputs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkOutput'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowSourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailoverMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePriority'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimarySource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowVpcInterfaceAttachment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Flow'),
                new \PHPStan\Type\Constant\ConstantStringType('Messages'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceFailoverConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('Maintenance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMonitoringConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClockRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fmt'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VideoFormat'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fmtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lang'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ChannelOrder'),
                                new \PHPStan\Type\Constant\ConstantStringType('Colorimetry'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExactFramerate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Par'),
                                new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tcs'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BT601'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT709'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2020'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('XYZ'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NARROW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULLPROTECT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('progressive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interlace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('progressive-segmented-frame'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SDR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PQ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HLG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100LINPQ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100LINHLG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST428-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENSITY'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('video'),
                            new \PHPStan\Type\Constant\ConstantStringType('audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('ancillary-data'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaLiveInputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamOutputConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BridgePorts'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutboundIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFactor'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncoderProfile'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('main'),
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailoverMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePriority'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimarySource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ena'),
                            new \PHPStan\Type\Constant\ConstantStringType('efa'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDay'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDeadline'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceScheduledDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStartHour'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Monday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tuesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wednesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Thursday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Friday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Saturday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunday'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbnailState'),
                        new \PHPStan\Type\Constant\ConstantStringType('AudioMonitoringSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentQualityAnalysisState'),
                        new \PHPStan\Type\Constant\ConstantStringType('VideoMonitoringSettings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SilentAudio'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BlackFrames'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrozenFrames'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeFlowSourceMetadata(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Messages'),
                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('TransportMediaInfo'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Programs'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PcrPid'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProgramPid'),
                        new \PHPStan\Type\Constant\ConstantStringType('Streams'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Channels'),
                            new \PHPStan\Type\Constant\ConstantStringType('Codec'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrameRate'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrameResolution'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pid'),
                            new \PHPStan\Type\Constant\ConstantStringType('SampleRate'),
                            new \PHPStan\Type\Constant\ConstantStringType('SampleSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamType'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('FrameHeight'),
                                new \PHPStan\Type\Constant\ConstantStringType('FrameWidth'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeFlowSourceThumbnail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ThumbnailDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Thumbnail'),
                    new \PHPStan\Type\Constant\ConstantStringType('ThumbnailMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timecode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function describeGateway(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Gateway'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EgressCidrBlocks'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Networks'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeGatewayInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GatewayInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BridgePlacement'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConnectionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceState'),
                    new \PHPStan\Type\Constant\ConstantStringType('RunningBridgeCount'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONNECTED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTRATION_ERROR'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function describeOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Offering'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricePerUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Mbps_Outbound_Bandwidth'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeReservation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Reservation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricePerUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Mbps_Outbound_Bandwidth'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function grantFlowEntitlements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('speke'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBridges(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bridges'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeState'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEntitlements(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementName'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFlows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Flows'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Maintenance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OWNED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENTITLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDay'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDeadline'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceScheduledDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStartHour'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Monday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tuesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wednesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Thursday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Friday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Saturday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunday'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGatewayInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Instances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayInstanceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('InstanceState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTERED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEREGISTRATION_ERROR'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGateways(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Gateways'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayState'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOfferings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Offerings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricePerUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecification'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Mbps_Outbound_Bandwidth'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listReservations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Reservations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricePerUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Mbps_Outbound_Bandwidth'),
                    ]),
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
    private function purchaseOffering(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Reservation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CurrencyCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('End'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('OfferingDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricePerUnit'),
                    new \PHPStan\Type\Constant\ConstantStringType('PriceUnits'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReservationState'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceSpecification'),
                    new \PHPStan\Type\Constant\ConstantStringType('Start'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('HOURLY'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReservedBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Mbps_Outbound_Bandwidth'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function removeBridgeOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeBridgeSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeFlowMediaStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeFlowOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeFlowSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function removeFlowVpcInterface(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('NonDeletedNetworkInterfaceIds'),
                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function revokeFlowEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function stopFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
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
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function updateBridge(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Bridge'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeMessages'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeState'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressGatewayBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngressGatewayBridge'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlacementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceFailoverConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('START_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('InstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxOutputs'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowOutput'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkOutput'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowSourceArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailoverMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePriority'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimarySource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkSource'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('FlowVpcInterfaceAttachment'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceSettings'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateBridgeOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Output'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowOutput'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkOutput'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlowSourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ttl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateBridgeSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlowSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('NetworkSource'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('FlowVpcInterfaceAttachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MulticastIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MulticastSourceIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateBridgeState(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('DesiredState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function updateFlow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Flow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EgressIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreams'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('Source'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceFailoverConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('Sources'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaces'),
                    new \PHPStan\Type\Constant\ConstantStringType('Maintenance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceMonitoringConfig'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                        new \PHPStan\Type\Constant\ConstantStringType('ClockRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Fmt'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamId'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                        new \PHPStan\Type\Constant\ConstantStringType('VideoFormat'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Fmtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('Lang'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ChannelOrder'),
                                new \PHPStan\Type\Constant\ConstantStringType('Colorimetry'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExactFramerate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Par'),
                                new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScanMode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Tcs'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BT601'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT709'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2020'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('XYZ'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NARROW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FULLPROTECT'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('progressive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('interlace'),
                                    new \PHPStan\Type\Constant\ConstantStringType('progressive-segmented-frame'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('SDR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PQ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HLG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100LINPQ'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BT2100LINHLG'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ST428-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DENSITY'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('video'),
                            new \PHPStan\Type\Constant\ConstantStringType('audio'),
                            new \PHPStan\Type\Constant\ConstantStringType('ancillary-data'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                        new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaLiveInputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamOutputConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('BridgePorts'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputStatus'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingParameters'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                                new \PHPStan\Type\Constant\ConstantStringType('OutboundIp'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('CompressionFactor'),
                                new \PHPStan\Type\Constant\ConstantStringType('EncoderProfile'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('main'),
                                    new \PHPStan\Type\Constant\ConstantStringType('high'),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailoverMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('RecoveryWindow'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourcePriority'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MERGE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILOVER'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PrimarySource'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                        new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                        new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Url'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                                new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('speke'),
                                new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                                new \PHPStan\Type\Constant\ConstantStringType('raw'),
                                new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                                new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                                new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                                new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                            new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                            new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                                new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                                new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                                new \PHPStan\Type\Constant\ConstantStringType('rist'),
                                new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                                new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                                new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                                new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                                new \PHPStan\Type\Constant\ConstantStringType('udp'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDBY'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkInterfaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecurityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubnetId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ena'),
                            new \PHPStan\Type\Constant\ConstantStringType('efa'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDay'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceDeadline'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceScheduledDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaintenanceStartHour'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Monday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tuesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Wednesday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Thursday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Friday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Saturday'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sunday'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ThumbnailState'),
                        new \PHPStan\Type\Constant\ConstantStringType('AudioMonitoringSettings'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContentQualityAnalysisState'),
                        new \PHPStan\Type\Constant\ConstantStringType('VideoMonitoringSettings'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('SilentAudio'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BlackFrames'),
                            new \PHPStan\Type\Constant\ConstantStringType('FrozenFrames'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('State'),
                                new \PHPStan\Type\Constant\ConstantStringType('ThresholdSeconds'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFlowEntitlement(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entitlement'),
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subscribers'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('speke'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateFlowMediaStream(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('MediaStream'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Attributes'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClockRate'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Fmt'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamId'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamType'),
                    new \PHPStan\Type\Constant\ConstantStringType('VideoFormat'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Fmtp'),
                        new \PHPStan\Type\Constant\ConstantStringType('Lang'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ChannelOrder'),
                            new \PHPStan\Type\Constant\ConstantStringType('Colorimetry'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExactFramerate'),
                            new \PHPStan\Type\Constant\ConstantStringType('Par'),
                            new \PHPStan\Type\Constant\ConstantStringType('Range'),
                            new \PHPStan\Type\Constant\ConstantStringType('ScanMode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tcs'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BT601'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT709'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2020'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2100'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST2065-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('XYZ'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NARROW'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULL'),
                                new \PHPStan\Type\Constant\ConstantStringType('FULLPROTECT'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('progressive'),
                                new \PHPStan\Type\Constant\ConstantStringType('interlace'),
                                new \PHPStan\Type\Constant\ConstantStringType('progressive-segmented-frame'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SDR'),
                                new \PHPStan\Type\Constant\ConstantStringType('PQ'),
                                new \PHPStan\Type\Constant\ConstantStringType('HLG'),
                                new \PHPStan\Type\Constant\ConstantStringType('LINEAR'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2100LINPQ'),
                                new \PHPStan\Type\Constant\ConstantStringType('BT2100LINHLG'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST2065-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ST428-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('DENSITY'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('video'),
                        new \PHPStan\Type\Constant\ConstantStringType('audio'),
                        new \PHPStan\Type\Constant\ConstantStringType('ancillary-data'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateFlowOutput(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Output'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('Encryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ListenerAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaLiveInputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamOutputConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Port'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('BridgePorts'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputStatus'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('speke'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DestinationConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('EncodingParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                            new \PHPStan\Type\Constant\ConstantStringType('OutboundIp'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                            new \PHPStan\Type\Constant\ConstantStringType('raw'),
                            new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                            new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CompressionFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('EncoderProfile'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('main'),
                                new \PHPStan\Type\Constant\ConstantStringType('high'),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateFlowSource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FlowArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Source'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataTransferSubscriberFeePercent'),
                    new \PHPStan\Type\Constant\ConstantStringType('Decryption'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestIp'),
                    new \PHPStan\Type\Constant\ConstantStringType('IngestPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('MediaStreamSourceConfigurations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                    new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Transport'),
                    new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('WhitelistCidr'),
                    new \PHPStan\Type\Constant\ConstantStringType('GatewayBridgeSource'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Algorithm'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstantInitializationVector'),
                        new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('SecretArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Url'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('aes128'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes192'),
                            new \PHPStan\Type\Constant\ConstantStringType('aes256'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('speke'),
                            new \PHPStan\Type\Constant\ConstantStringType('static-key'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-password'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EncodingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('InputConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('MediaStreamName'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('jxsv'),
                            new \PHPStan\Type\Constant\ConstantStringType('raw'),
                            new \PHPStan\Type\Constant\ConstantStringType('smpte291'),
                            new \PHPStan\Type\Constant\ConstantStringType('pcm'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('InputIp'),
                            new \PHPStan\Type\Constant\ConstantStringType('InputPort'),
                            new \PHPStan\Type\Constant\ConstantStringType('Interface'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrAllowList'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxBitrate'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxSyncBuffer'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
                        new \PHPStan\Type\Constant\ConstantStringType('RemoteId'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderControlPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('SenderIpAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SmoothingLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('SourceListenerPort'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreamId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-push'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp-fec'),
                            new \PHPStan\Type\Constant\ConstantStringType('rtp'),
                            new \PHPStan\Type\Constant\ConstantStringType('zixi-pull'),
                            new \PHPStan\Type\Constant\ConstantStringType('rist'),
                            new \PHPStan\Type\Constant\ConstantStringType('st2110-jpegxs'),
                            new \PHPStan\Type\Constant\ConstantStringType('cdi'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-listener'),
                            new \PHPStan\Type\Constant\ConstantStringType('srt-caller'),
                            new \PHPStan\Type\Constant\ConstantStringType('fujitsu-qos'),
                            new \PHPStan\Type\Constant\ConstantStringType('udp'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BridgeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceAttachment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('VpcInterfaceName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateGatewayInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('BridgePlacement'),
                new \PHPStan\Type\Constant\ConstantStringType('GatewayInstanceArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCKED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}