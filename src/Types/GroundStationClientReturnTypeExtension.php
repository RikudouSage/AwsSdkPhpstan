<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GroundStationClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GroundStation\GroundStationClient>
     */
    public function getClass(): string
    {
        return \Aws\GroundStation\GroundStationClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelContact',
            'createConfig',
            'createDataflowEndpointGroup',
            'createEphemeris',
            'createMissionProfile',
            'deleteConfig',
            'deleteDataflowEndpointGroup',
            'deleteEphemeris',
            'deleteMissionProfile',
            'describeContact',
            'describeEphemeris',
            'getAgentConfiguration',
            'getConfig',
            'getDataflowEndpointGroup',
            'getMinuteUsage',
            'getMissionProfile',
            'getSatellite',
            'listConfigs',
            'listContacts',
            'listDataflowEndpointGroups',
            'listEphemerides',
            'listGroundStations',
            'listMissionProfiles',
            'listSatellites',
            'listTagsForResource',
            'registerAgent',
            'reserveContact',
            'tagResource',
            'untagResource',
            'updateAgentStatus',
            'updateConfig',
            'updateEphemeris',
            'updateMissionProfile',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelContact' => $this->cancelContact(),
            'createConfig' => $this->createConfig(),
            'createDataflowEndpointGroup' => $this->createDataflowEndpointGroup(),
            'createEphemeris' => $this->createEphemeris(),
            'createMissionProfile' => $this->createMissionProfile(),
            'deleteConfig' => $this->deleteConfig(),
            'deleteDataflowEndpointGroup' => $this->deleteDataflowEndpointGroup(),
            'deleteEphemeris' => $this->deleteEphemeris(),
            'deleteMissionProfile' => $this->deleteMissionProfile(),
            'describeContact' => $this->describeContact(),
            'describeEphemeris' => $this->describeEphemeris(),
            'getAgentConfiguration' => $this->getAgentConfiguration(),
            'getConfig' => $this->getConfig(),
            'getDataflowEndpointGroup' => $this->getDataflowEndpointGroup(),
            'getMinuteUsage' => $this->getMinuteUsage(),
            'getMissionProfile' => $this->getMissionProfile(),
            'getSatellite' => $this->getSatellite(),
            'listConfigs' => $this->listConfigs(),
            'listContacts' => $this->listContacts(),
            'listDataflowEndpointGroups' => $this->listDataflowEndpointGroups(),
            'listEphemerides' => $this->listEphemerides(),
            'listGroundStations' => $this->listGroundStations(),
            'listMissionProfiles' => $this->listMissionProfiles(),
            'listSatellites' => $this->listSatellites(),
            'listTagsForResource' => $this->listTagsForResource(),
            'registerAgent' => $this->registerAgent(),
            'reserveContact' => $this->reserveContact(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAgentStatus' => $this->updateAgentStatus(),
            'updateConfig' => $this->updateConfig(),
            'updateEphemeris' => $this->updateEphemeris(),
            'updateMissionProfile' => $this->updateMissionProfile(),
        };
    }
    private function cancelContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contactId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configId'),
                new \PHPStan\Type\Constant\ConstantStringType('configType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                ]),
            ]),
        ]);
    }
    private function createDataflowEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createEphemeris(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createMissionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configId'),
                new \PHPStan\Type\Constant\ConstantStringType('configType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                ]),
            ]),
        ]);
    }
    private function deleteDataflowEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteEphemeris(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteMissionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contactId'),
                new \PHPStan\Type\Constant\ConstantStringType('contactStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('dataflowList'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('groundStation'),
                new \PHPStan\Type\Constant\ConstantStringType('maximumElevation'),
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('postPassEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('prePassStartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('satelliteArn'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('visibilityEndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('visibilityStartTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_SCHEDULE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('POSTPASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('PREPASS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('destination'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('configId'),
                        new \PHPStan\Type\Constant\ConstantStringType('configType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataflowDestinationRegion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('antennaDemodDecodeDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpointDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3RecordingDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('outputNode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsGroundStationAgentEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthReasons'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('auditResults'),
                                    new \PHPStan\Type\Constant\ConstantStringType('egressAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ingressAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('socketAddress'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('socketAddress'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                                                new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                                        new \PHPStan\Type\Constant\ConstantStringType('creating'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_REGISTERED_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_IP_OWNERSHIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED_TO_CREATE_SLR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNVERIFIED_IP_OWNERSHIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING_DATAPLANE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATAPLANE_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyTemplate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                            new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                            new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                            new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('configDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('configId'),
                        new \PHPStan\Type\Constant\ConstantStringType('configType'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataflowSourceRegion'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('antennaDemodDecodeDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('endpointDetails'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3RecordingDetails'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('outputNode'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('awsGroundStationAgentEndpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthReasons'),
                                new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                                new \PHPStan\Type\Constant\ConstantStringType('securityDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                                    new \PHPStan\Type\Constant\ConstantStringType('auditResults'),
                                    new \PHPStan\Type\Constant\ConstantStringType('egressAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ingressAddress'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('socketAddress'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                                        new \PHPStan\Type\Constant\ConstantStringType('socketAddress'),
                                    ], [
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                                            new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\Constant\ConstantArrayType([
                                                new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                                                new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                            ], [
                                                new \PHPStan\Type\IntegerType(),
                                                new \PHPStan\Type\IntegerType(),
                                            ]),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('address'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                                        new \PHPStan\Type\Constant\ConstantStringType('port'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\IntegerType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('created'),
                                        new \PHPStan\Type\Constant\ConstantStringType('creating'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('NO_REGISTERED_AGENT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INVALID_IP_OWNERSHIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED_TO_CREATE_SLR'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UNVERIFIED_IP_OWNERSHIP'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING_DATAPLANE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DATAPLANE_FAILURE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                ])),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                                    new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('keyTemplate'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                            new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                            new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                            new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                            new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                            new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEGREE_ANGLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RADIAN'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeEphemeris(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
                new \PHPStan\Type\Constant\ConstantStringType('invalidReason'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('priority'),
                new \PHPStan\Type\Constant\ConstantStringType('satelliteId'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('suppliedData'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('METADATA_INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('TIME_RANGE_INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('TRAJECTORY_INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('KMS_KEY_INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_ERROR'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('oem'),
                    new \PHPStan\Type\Constant\ConstantStringType('tle'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ephemerisData'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceS3Object'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ephemerisData'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceS3Object'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getAgentConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
                new \PHPStan\Type\Constant\ConstantStringType('taskingDocument'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configData'),
                new \PHPStan\Type\Constant\ConstantStringType('configId'),
                new \PHPStan\Type\Constant\ConstantStringType('configType'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('antennaDownlinkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('antennaDownlinkDemodDecodeConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('antennaUplinkConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3RecordingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('trackingConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplinkEchoConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('spectrumConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                            new \PHPStan\Type\Constant\ConstantStringType('centerFrequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('polarization'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('units'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kHz'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('units'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kHz'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LEFT_HAND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RIGHT_HAND'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('decodeConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('demodulationConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('spectrumConfig'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unvalidatedJSON'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('unvalidatedJSON'),
                        ], [
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('bandwidth'),
                            new \PHPStan\Type\Constant\ConstantStringType('centerFrequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('polarization'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('units'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kHz'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('units'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kHz'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LEFT_HAND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RIGHT_HAND'),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('spectrumConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetEirp'),
                        new \PHPStan\Type\Constant\ConstantStringType('transmitDisabled'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('centerFrequency'),
                            new \PHPStan\Type\Constant\ConstantStringType('polarization'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('units'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('GHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MHz'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kHz'),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('LEFT_HAND'),
                                new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                                new \PHPStan\Type\Constant\ConstantStringType('RIGHT_HAND'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('units'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('dBW'),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointName'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointRegion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucketArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('autotrack'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PREFERRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REQUIRED'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('antennaUplinkConfigArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDataflowEndpointGroup(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contactPostPassDurationSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('contactPrePassDurationSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupArn'),
                new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupId'),
                new \PHPStan\Type\Constant\ConstantStringType('endpointsDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsGroundStationAgentEndpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthReasons'),
                    new \PHPStan\Type\Constant\ConstantStringType('healthStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('agentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('auditResults'),
                        new \PHPStan\Type\Constant\ConstantStringType('egressAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('ingressAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                            new \PHPStan\Type\Constant\ConstantStringType('socketAddress'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('port'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                            new \PHPStan\Type\Constant\ConstantStringType('socketAddress'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('portRange'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('maximum'),
                                    new \PHPStan\Type\Constant\ConstantStringType('minimum'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('address'),
                        new \PHPStan\Type\Constant\ConstantStringType('mtu'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('port'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('created'),
                            new \PHPStan\Type\Constant\ConstantStringType('creating'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleted'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleting'),
                            new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NO_REGISTERED_AGENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_IP_OWNERSHIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_AUTHORIZED_TO_CREATE_SLR'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNVERIFIED_IP_OWNERSHIP'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIALIZING_DATAPLANE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DATAPLANE_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getMinuteUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('estimatedMinutesRemaining'),
                new \PHPStan\Type\Constant\ConstantStringType('isReservedMinutesCustomer'),
                new \PHPStan\Type\Constant\ConstantStringType('totalReservedMinuteAllocation'),
                new \PHPStan\Type\Constant\ConstantStringType('totalScheduledMinutes'),
                new \PHPStan\Type\Constant\ConstantStringType('upcomingMinutesScheduled'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getMissionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contactPostPassDurationSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('contactPrePassDurationSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('dataflowEdges'),
                new \PHPStan\Type\Constant\ConstantStringType('minimumViableContactDurationSeconds'),
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileArn'),
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileId'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('region'),
                new \PHPStan\Type\Constant\ConstantStringType('streamsKmsKey'),
                new \PHPStan\Type\Constant\ConstantStringType('streamsKmsRole'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('trackingConfigArn'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType())),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('kmsAliasArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsAliasName'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSatellite(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('currentEphemeris'),
                new \PHPStan\Type\Constant\ConstantStringType('groundStations'),
                new \PHPStan\Type\Constant\ConstantStringType('noradSatelliteID'),
                new \PHPStan\Type\Constant\ConstantStringType('satelliteArn'),
                new \PHPStan\Type\Constant\ConstantStringType('satelliteId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
                    new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('source'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROVIDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPACE_TRACK'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('configArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('configId'),
                    new \PHPStan\Type\Constant\ConstantStringType('configType'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                        new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                        new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                        new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                        new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                        new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contactList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('contactStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('groundStation'),
                    new \PHPStan\Type\Constant\ConstantStringType('maximumElevation'),
                    new \PHPStan\Type\Constant\ConstantStringType('missionProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('postPassEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('prePassStartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('satelliteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityEndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('visibilityStartTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_TO_SCHEDULE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('POSTPASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PREPASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULING'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEGREE_ANGLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RADIAN'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDataflowEndpointGroups(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataflowEndpointGroupId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEphemerides(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ephemerides'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('creationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('priority'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourceS3Object'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGroundStations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('groundStationList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('groundStationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('groundStationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMissionProfiles(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('missionProfileArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('missionProfileId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSatellites(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('satellites'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('currentEphemeris'),
                    new \PHPStan\Type\Constant\ConstantStringType('groundStations'),
                    new \PHPStan\Type\Constant\ConstantStringType('noradSatelliteID'),
                    new \PHPStan\Type\Constant\ConstantStringType('satelliteArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('satelliteId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
                        new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_PROVIDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPACE_TRACK'),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
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
    private function registerAgent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function reserveContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contactId'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateAgentStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('agentId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('configArn'),
                new \PHPStan\Type\Constant\ConstantStringType('configId'),
                new \PHPStan\Type\Constant\ConstantStringType('configType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-downlink-demod-decode'),
                    new \PHPStan\Type\Constant\ConstantStringType('antenna-uplink'),
                    new \PHPStan\Type\Constant\ConstantStringType('dataflow-endpoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('tracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('uplink-echo'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3-recording'),
                ]),
            ]),
        ]);
    }
    private function updateEphemeris(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ephemerisId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateMissionProfile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('missionProfileId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}