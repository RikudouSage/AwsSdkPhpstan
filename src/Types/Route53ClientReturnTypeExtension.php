<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class Route53ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Route53\Route53Client>
     */
    public function getClass(): string
    {
        return \Aws\Route53\Route53Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'activateKeySigningKey',
            'associateVPCWithHostedZone',
            'changeCidrCollection',
            'changeResourceRecordSets',
            'changeTagsForResource',
            'createCidrCollection',
            'createHealthCheck',
            'createHostedZone',
            'createKeySigningKey',
            'createQueryLoggingConfig',
            'createReusableDelegationSet',
            'createTrafficPolicy',
            'createTrafficPolicyInstance',
            'createTrafficPolicyVersion',
            'createVPCAssociationAuthorization',
            'deactivateKeySigningKey',
            'deleteCidrCollection',
            'deleteHealthCheck',
            'deleteHostedZone',
            'deleteKeySigningKey',
            'deleteQueryLoggingConfig',
            'deleteReusableDelegationSet',
            'deleteTrafficPolicy',
            'deleteTrafficPolicyInstance',
            'deleteVPCAssociationAuthorization',
            'disableHostedZoneDNSSEC',
            'disassociateVPCFromHostedZone',
            'enableHostedZoneDNSSEC',
            'getAccountLimit',
            'getChange',
            'getCheckerIpRanges',
            'getDNSSEC',
            'getGeoLocation',
            'getHealthCheck',
            'getHealthCheckCount',
            'getHealthCheckLastFailureReason',
            'getHealthCheckStatus',
            'getHostedZone',
            'getHostedZoneCount',
            'getHostedZoneLimit',
            'getQueryLoggingConfig',
            'getReusableDelegationSet',
            'getReusableDelegationSetLimit',
            'getTrafficPolicy',
            'getTrafficPolicyInstance',
            'getTrafficPolicyInstanceCount',
            'listCidrBlocks',
            'listCidrCollections',
            'listCidrLocations',
            'listGeoLocations',
            'listHealthChecks',
            'listHostedZones',
            'listHostedZonesByName',
            'listHostedZonesByVPC',
            'listQueryLoggingConfigs',
            'listResourceRecordSets',
            'listReusableDelegationSets',
            'listTagsForResource',
            'listTagsForResources',
            'listTrafficPolicies',
            'listTrafficPolicyInstances',
            'listTrafficPolicyInstancesByHostedZone',
            'listTrafficPolicyInstancesByPolicy',
            'listTrafficPolicyVersions',
            'listVPCAssociationAuthorizations',
            'testDNSAnswer',
            'updateHealthCheck',
            'updateHostedZoneComment',
            'updateTrafficPolicyComment',
            'updateTrafficPolicyInstance',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'activateKeySigningKey' => $this->activateKeySigningKey(),
            'associateVPCWithHostedZone' => $this->associateVPCWithHostedZone(),
            'changeCidrCollection' => $this->changeCidrCollection(),
            'changeResourceRecordSets' => $this->changeResourceRecordSets(),
            'changeTagsForResource' => $this->changeTagsForResource(),
            'createCidrCollection' => $this->createCidrCollection(),
            'createHealthCheck' => $this->createHealthCheck(),
            'createHostedZone' => $this->createHostedZone(),
            'createKeySigningKey' => $this->createKeySigningKey(),
            'createQueryLoggingConfig' => $this->createQueryLoggingConfig(),
            'createReusableDelegationSet' => $this->createReusableDelegationSet(),
            'createTrafficPolicy' => $this->createTrafficPolicy(),
            'createTrafficPolicyInstance' => $this->createTrafficPolicyInstance(),
            'createTrafficPolicyVersion' => $this->createTrafficPolicyVersion(),
            'createVPCAssociationAuthorization' => $this->createVPCAssociationAuthorization(),
            'deactivateKeySigningKey' => $this->deactivateKeySigningKey(),
            'deleteCidrCollection' => $this->deleteCidrCollection(),
            'deleteHealthCheck' => $this->deleteHealthCheck(),
            'deleteHostedZone' => $this->deleteHostedZone(),
            'deleteKeySigningKey' => $this->deleteKeySigningKey(),
            'deleteQueryLoggingConfig' => $this->deleteQueryLoggingConfig(),
            'deleteReusableDelegationSet' => $this->deleteReusableDelegationSet(),
            'deleteTrafficPolicy' => $this->deleteTrafficPolicy(),
            'deleteTrafficPolicyInstance' => $this->deleteTrafficPolicyInstance(),
            'deleteVPCAssociationAuthorization' => $this->deleteVPCAssociationAuthorization(),
            'disableHostedZoneDNSSEC' => $this->disableHostedZoneDNSSEC(),
            'disassociateVPCFromHostedZone' => $this->disassociateVPCFromHostedZone(),
            'enableHostedZoneDNSSEC' => $this->enableHostedZoneDNSSEC(),
            'getAccountLimit' => $this->getAccountLimit(),
            'getChange' => $this->getChange(),
            'getCheckerIpRanges' => $this->getCheckerIpRanges(),
            'getDNSSEC' => $this->getDNSSEC(),
            'getGeoLocation' => $this->getGeoLocation(),
            'getHealthCheck' => $this->getHealthCheck(),
            'getHealthCheckCount' => $this->getHealthCheckCount(),
            'getHealthCheckLastFailureReason' => $this->getHealthCheckLastFailureReason(),
            'getHealthCheckStatus' => $this->getHealthCheckStatus(),
            'getHostedZone' => $this->getHostedZone(),
            'getHostedZoneCount' => $this->getHostedZoneCount(),
            'getHostedZoneLimit' => $this->getHostedZoneLimit(),
            'getQueryLoggingConfig' => $this->getQueryLoggingConfig(),
            'getReusableDelegationSet' => $this->getReusableDelegationSet(),
            'getReusableDelegationSetLimit' => $this->getReusableDelegationSetLimit(),
            'getTrafficPolicy' => $this->getTrafficPolicy(),
            'getTrafficPolicyInstance' => $this->getTrafficPolicyInstance(),
            'getTrafficPolicyInstanceCount' => $this->getTrafficPolicyInstanceCount(),
            'listCidrBlocks' => $this->listCidrBlocks(),
            'listCidrCollections' => $this->listCidrCollections(),
            'listCidrLocations' => $this->listCidrLocations(),
            'listGeoLocations' => $this->listGeoLocations(),
            'listHealthChecks' => $this->listHealthChecks(),
            'listHostedZones' => $this->listHostedZones(),
            'listHostedZonesByName' => $this->listHostedZonesByName(),
            'listHostedZonesByVPC' => $this->listHostedZonesByVPC(),
            'listQueryLoggingConfigs' => $this->listQueryLoggingConfigs(),
            'listResourceRecordSets' => $this->listResourceRecordSets(),
            'listReusableDelegationSets' => $this->listReusableDelegationSets(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTagsForResources' => $this->listTagsForResources(),
            'listTrafficPolicies' => $this->listTrafficPolicies(),
            'listTrafficPolicyInstances' => $this->listTrafficPolicyInstances(),
            'listTrafficPolicyInstancesByHostedZone' => $this->listTrafficPolicyInstancesByHostedZone(),
            'listTrafficPolicyInstancesByPolicy' => $this->listTrafficPolicyInstancesByPolicy(),
            'listTrafficPolicyVersions' => $this->listTrafficPolicyVersions(),
            'listVPCAssociationAuthorizations' => $this->listVPCAssociationAuthorizations(),
            'testDNSAnswer' => $this->testDNSAnswer(),
            'updateHealthCheck' => $this->updateHealthCheck(),
            'updateHostedZoneComment' => $this->updateHostedZoneComment(),
            'updateTrafficPolicyComment' => $this->updateTrafficPolicyComment(),
            'updateTrafficPolicyInstance' => $this->updateTrafficPolicyInstance(),
        };
    }
    private function activateKeySigningKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function associateVPCWithHostedZone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function changeCidrCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function changeResourceRecordSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function changeTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createCidrCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Collection'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchAlarmConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('FullyQualifiedDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SearchString'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeasureLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inverted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildHealthChecks'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableSNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataHealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingControlArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_STR_MATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS_STR_MATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALCULATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_METRIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECOVERY_CONTROL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                                new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                                new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Healthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unhealthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastKnownStatus'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualToThreshold'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createHostedZone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZone'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('DelegationSet'),
                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceRecordSetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateZone'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('NameServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VPCRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                        new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                        new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createKeySigningKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('KeySigningKey'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('KmsArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Flag'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithmMnemonic'),
                    new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('DigestAlgorithmMnemonic'),
                    new \PHPStan\Type\Constant\ConstantStringType('DigestAlgorithmType'),
                    new \PHPStan\Type\Constant\ConstantStringType('KeyTag'),
                    new \PHPStan\Type\Constant\ConstantStringType('DigestValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DSRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('DNSKEYRecord'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createQueryLoggingConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryLoggingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createReusableDelegationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DelegationSet'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('NameServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrafficPolicyInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstance'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createTrafficPolicyVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicy'),
                new \PHPStan\Type\Constant\ConstantStringType('Location'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createVPCAssociationAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('VPC'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('VPCRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                        new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                        new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                        new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deactivateKeySigningKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteCidrCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteHostedZone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteKeySigningKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteQueryLoggingConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteReusableDelegationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTrafficPolicyInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteVPCAssociationAuthorization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disableHostedZoneDNSSEC(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disassociateVPCFromHostedZone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function enableHostedZoneDNSSEC(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAccountLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_HEALTH_CHECKS_BY_OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_HOSTED_ZONES_BY_OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_TRAFFIC_POLICY_INSTANCES_BY_OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_REUSABLE_DELEGATION_SETS_BY_OWNER'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_TRAFFIC_POLICIES_BY_OWNER'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeInfo'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubmittedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSYNC'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getCheckerIpRanges(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CheckerIpRanges'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getDNSSEC(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('KeySigningKeys'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServeSignature'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('KmsArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Flag'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithmMnemonic'),
                        new \PHPStan\Type\Constant\ConstantStringType('SigningAlgorithmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('DigestAlgorithmMnemonic'),
                        new \PHPStan\Type\Constant\ConstantStringType('DigestAlgorithmType'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyTag'),
                        new \PHPStan\Type\Constant\ConstantStringType('DigestValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('PublicKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('DSRecord'),
                        new \PHPStan\Type\Constant\ConstantStringType('DNSKEYRecord'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedDate'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastModifiedDate'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getGeoLocation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeoLocationDetails'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ContinentCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ContinentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubdivisionCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubdivisionName'),
                ], [
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
    private function getHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchAlarmConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('FullyQualifiedDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SearchString'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeasureLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inverted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildHealthChecks'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableSNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataHealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingControlArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_STR_MATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS_STR_MATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALCULATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_METRIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECOVERY_CONTROL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                                new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                                new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Healthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unhealthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastKnownStatus'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualToThreshold'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getHealthCheckCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheckCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getHealthCheckLastFailureReason(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheckObservations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReport'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckedTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getHealthCheckStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheckObservations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReport'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Status'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckedTime'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getHostedZone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZone'),
                new \PHPStan\Type\Constant\ConstantStringType('DelegationSet'),
                new \PHPStan\Type\Constant\ConstantStringType('VPCs'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceRecordSetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateZone'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('NameServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                            new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                            new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getHostedZoneCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getHostedZoneLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_RRSETS_BY_ZONE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MAX_VPCS_ASSOCIATED_BY_ZONE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getQueryLoggingConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryLoggingConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getReusableDelegationSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DelegationSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('NameServers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getReusableDelegationSetLimit(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Limit'),
                new \PHPStan\Type\Constant\ConstantStringType('Count'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('MAX_ZONES_BY_REUSABLE_DELEGATION_SET'),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function getTrafficPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTrafficPolicyInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTrafficPolicyInstanceCount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceCount'),
            ], [
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function listCidrBlocks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CidrBlocks'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('CidrBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocationName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCidrCollections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CidrCollections'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listCidrLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('CidrLocations'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocationName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listGeoLocations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeoLocationDetailsList'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextContinentCode'),
                new \PHPStan\Type\Constant\ConstantStringType('NextCountryCode'),
                new \PHPStan\Type\Constant\ConstantStringType('NextSubdivisionCode'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ContinentCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ContinentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('CountryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubdivisionCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubdivisionName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHealthChecks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthChecks'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthCheckVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchAlarmConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('Port'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('FullyQualifiedDomainName'),
                            new \PHPStan\Type\Constant\ConstantStringType('SearchString'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequestInterval'),
                            new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('MeasureLatency'),
                            new \PHPStan\Type\Constant\ConstantStringType('Inverted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('HealthThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChildHealthChecks'),
                            new \PHPStan\Type\Constant\ConstantStringType('EnableSNI'),
                            new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                            new \PHPStan\Type\Constant\ConstantStringType('AlarmIdentifier'),
                            new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataHealthStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoutingControlArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTP_STR_MATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('HTTPS_STR_MATCH'),
                                new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                                new \PHPStan\Type\Constant\ConstantStringType('CALCULATED'),
                                new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_METRIC'),
                                new \PHPStan\Type\Constant\ConstantStringType('RECOVERY_CONTROL'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                                ]),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                                    new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                                    new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Healthy'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unhealthy'),
                                new \PHPStan\Type\Constant\ConstantStringType('LastKnownStatus'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                            new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Period'),
                            new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                            new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualToThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('GreaterThanThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanThreshold'),
                                new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualToThreshold'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Average'),
                                new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                                new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                                new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                                new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHostedZones(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZones'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRecordSetCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateZone'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHostedZonesByName(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZones'),
                new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextDNSName'),
                new \PHPStan\Type\Constant\ConstantStringType('NextHostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('Config'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRecordSetCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                            new \PHPStan\Type\Constant\ConstantStringType('PrivateZone'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHostedZonesByVPC(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OwningAccount'),
                            new \PHPStan\Type\Constant\ConstantStringType('OwningService'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listQueryLoggingConfigs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryLoggingConfigs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CloudWatchLogsLogGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceRecordSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceRecordSets'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextRecordName'),
                new \PHPStan\Type\Constant\ConstantStringType('NextRecordType'),
                new \PHPStan\Type\Constant\ConstantStringType('NextRecordIdentifier'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('SetIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('Weight'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeoLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Failover'),
                        new \PHPStan\Type\Constant\ConstantStringType('MultiValueAnswer'),
                        new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceRecords'),
                        new \PHPStan\Type\Constant\ConstantStringType('AliasTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthCheckId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('CidrRoutingConfig'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeoProximityLocation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                            new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                            new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ContinentCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubdivisionCode'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PRIMARY'),
                            new \PHPStan\Type\Constant\ConstantStringType('SECONDARY'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                            new \PHPStan\Type\Constant\ConstantStringType('DNSName'),
                            new \PHPStan\Type\Constant\ConstantStringType('EvaluateTargetHealth'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CollectionId'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocationName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWSRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalZoneGroup'),
                            new \PHPStan\Type\Constant\ConstantStringType('Coordinates'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bias'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                                new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('MX'),
                    new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('DS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReusableDelegationSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DelegationSets'),
                new \PHPStan\Type\Constant\ConstantStringType('Marker'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('NextMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                        new \PHPStan\Type\Constant\ConstantStringType('NameServers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTagSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('healthcheck'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostedzone'),
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
            ]),
        ]);
    }
    private function listTagsForResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTagSets'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('healthcheck'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostedzone'),
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
            ]),
        ]);
    }
    private function listTrafficPolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicySummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('LatestVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyCount'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrafficPolicyInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceNameMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceTypeMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('MX'),
                    new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('DS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrafficPolicyInstancesByHostedZone(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceNameMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceTypeMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('MX'),
                    new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('DS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrafficPolicyInstancesByPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneIdMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceNameMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstanceTypeMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                        new \PHPStan\Type\Constant\ConstantStringType('State'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('MX'),
                    new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('DS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrafficPolicyVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('IsTruncated'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersionMarker'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxItems'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Document'),
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                            new \PHPStan\Type\Constant\ConstantStringType('A'),
                            new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                            new \PHPStan\Type\Constant\ConstantStringType('NS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                            new \PHPStan\Type\Constant\ConstantStringType('MX'),
                            new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                            new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                            new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                            new \PHPStan\Type\Constant\ConstantStringType('DS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                            new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                            new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listVPCAssociationAuthorizations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('VPCs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('VPCRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('VPCId'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                            new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                            new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                            new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function testDNSAnswer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Nameserver'),
                new \PHPStan\Type\Constant\ConstantStringType('RecordName'),
                new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                new \PHPStan\Type\Constant\ConstantStringType('RecordData'),
                new \PHPStan\Type\Constant\ConstantStringType('ResponseCode'),
                new \PHPStan\Type\Constant\ConstantStringType('Protocol'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                    new \PHPStan\Type\Constant\ConstantStringType('A'),
                    new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                    new \PHPStan\Type\Constant\ConstantStringType('NS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                    new \PHPStan\Type\Constant\ConstantStringType('MX'),
                    new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                    new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                    new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                    new \PHPStan\Type\Constant\ConstantStringType('DS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                    new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                    new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                    new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateHealthCheck(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthCheck'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthCheckVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('CloudWatchAlarmConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('IPAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('Port'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourcePath'),
                        new \PHPStan\Type\Constant\ConstantStringType('FullyQualifiedDomainName'),
                        new \PHPStan\Type\Constant\ConstantStringType('SearchString'),
                        new \PHPStan\Type\Constant\ConstantStringType('RequestInterval'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('MeasureLatency'),
                        new \PHPStan\Type\Constant\ConstantStringType('Inverted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Disabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChildHealthChecks'),
                        new \PHPStan\Type\Constant\ConstantStringType('EnableSNI'),
                        new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AlarmIdentifier'),
                        new \PHPStan\Type\Constant\ConstantStringType('InsufficientDataHealthStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('RoutingControlArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTP_STR_MATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('HTTPS_STR_MATCH'),
                            new \PHPStan\Type\Constant\ConstantStringType('TCP'),
                            new \PHPStan\Type\Constant\ConstantStringType('CALCULATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUDWATCH_METRIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('RECOVERY_CONTROL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                            ]),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-east-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ca-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-central-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-west-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('me-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('me-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-south-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-northeast-3'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-north-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('sa-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('cn-northwest-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('cn-north-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('af-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-south-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('eu-south-2'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-gov-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-gov-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-iso-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-iso-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('us-isob-east-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-4'),
                                new \PHPStan\Type\Constant\ConstantStringType('il-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ca-west-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-5'),
                                new \PHPStan\Type\Constant\ConstantStringType('mx-central-1'),
                                new \PHPStan\Type\Constant\ConstantStringType('ap-southeast-7'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Healthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unhealthy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastKnownStatus'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('EvaluationPeriods'),
                        new \PHPStan\Type\Constant\ConstantStringType('Threshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('ComparisonOperator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Period'),
                        new \PHPStan\Type\Constant\ConstantStringType('MetricName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Namespace'),
                        new \PHPStan\Type\Constant\ConstantStringType('Statistic'),
                        new \PHPStan\Type\Constant\ConstantStringType('Dimensions'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanOrEqualToThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('GreaterThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanThreshold'),
                            new \PHPStan\Type\Constant\ConstantStringType('LessThanOrEqualToThreshold'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Average'),
                            new \PHPStan\Type\Constant\ConstantStringType('Sum'),
                            new \PHPStan\Type\Constant\ConstantStringType('SampleCount'),
                            new \PHPStan\Type\Constant\ConstantStringType('Maximum'),
                            new \PHPStan\Type\Constant\ConstantStringType('Minimum'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateHostedZoneComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HostedZone'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('CallerReference'),
                    new \PHPStan\Type\Constant\ConstantStringType('Config'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceRecordSetCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LinkedService'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                        new \PHPStan\Type\Constant\ConstantStringType('PrivateZone'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ServicePrincipal'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateTrafficPolicyComment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Document'),
                    new \PHPStan\Type\Constant\ConstantStringType('Comment'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateTrafficPolicyInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('HostedZoneId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('TTL'),
                    new \PHPStan\Type\Constant\ConstantStringType('State'),
                    new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('TrafficPolicyType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SOA'),
                        new \PHPStan\Type\Constant\ConstantStringType('A'),
                        new \PHPStan\Type\Constant\ConstantStringType('TXT'),
                        new \PHPStan\Type\Constant\ConstantStringType('NS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CNAME'),
                        new \PHPStan\Type\Constant\ConstantStringType('MX'),
                        new \PHPStan\Type\Constant\ConstantStringType('NAPTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PTR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SRV'),
                        new \PHPStan\Type\Constant\ConstantStringType('SPF'),
                        new \PHPStan\Type\Constant\ConstantStringType('AAAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAA'),
                        new \PHPStan\Type\Constant\ConstantStringType('DS'),
                        new \PHPStan\Type\Constant\ConstantStringType('TLSA'),
                        new \PHPStan\Type\Constant\ConstantStringType('SSHFP'),
                        new \PHPStan\Type\Constant\ConstantStringType('SVCB'),
                        new \PHPStan\Type\Constant\ConstantStringType('HTTPS'),
                    ]),
                ]),
            ]),
        ]);
    }
}