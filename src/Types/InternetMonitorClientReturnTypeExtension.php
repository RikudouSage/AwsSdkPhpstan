<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class InternetMonitorClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\InternetMonitor\InternetMonitorClient>
     */
    public function getClass(): string
    {
        return \Aws\InternetMonitor\InternetMonitorClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'createMonitor',
            'deleteMonitor',
            'getHealthEvent',
            'getInternetEvent',
            'getMonitor',
            'getQueryResults',
            'getQueryStatus',
            'listHealthEvents',
            'listInternetEvents',
            'listMonitors',
            'listTagsForResource',
            'startQuery',
            'stopQuery',
            'tagResource',
            'untagResource',
            'updateMonitor',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'createMonitor' => $this->createMonitor(),
            'deleteMonitor' => $this->deleteMonitor(),
            'getHealthEvent' => $this->getHealthEvent(),
            'getInternetEvent' => $this->getInternetEvent(),
            'getMonitor' => $this->getMonitor(),
            'getQueryResults' => $this->getQueryResults(),
            'getQueryStatus' => $this->getQueryStatus(),
            'listHealthEvents' => $this->listHealthEvents(),
            'listInternetEvents' => $this->listInternetEvents(),
            'listMonitors' => $this->listMonitors(),
            'listTagsForResource' => $this->listTagsForResource(),
            'startQuery' => $this->startQuery(),
            'stopQuery' => $this->stopQuery(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateMonitor' => $this->updateMonitor(),
        };
    }
    private function createMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function deleteMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getHealthEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventArn'),
                new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ImpactedLocations'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentOfTotalTrafficImpacted'),
                new \PHPStan\Type\Constant\ConstantStringType('ImpactType'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthScoreThreshold'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metro'),
                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                    new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubdivisionCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CausedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('InternetHealth'),
                    new \PHPStan\Type\Constant\ConstantStringType('Ipv4Prefixes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Networks'),
                        new \PHPStan\Type\Constant\ConstantStringType('AsPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('NetworkEventType'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                            new \PHPStan\Type\Constant\ConstantStringType('Internet'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Availability'),
                        new \PHPStan\Type\Constant\ConstantStringType('Performance'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExperienceScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('PercentOfTotalTrafficImpacted'),
                            new \PHPStan\Type\Constant\ConstantStringType('PercentOfClientLocationImpacted'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ExperienceScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('PercentOfTotalTrafficImpacted'),
                            new \PHPStan\Type\Constant\ConstantStringType('PercentOfClientLocationImpacted'),
                            new \PHPStan\Type\Constant\ConstantStringType('RoundTripTime'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('P50'),
                                new \PHPStan\Type\Constant\ConstantStringType('P90'),
                                new \PHPStan\Type\Constant\ConstantStringType('P95'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_AVAILABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('LOCAL_PERFORMANCE'),
                ]),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function getInternetEvent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                new \PHPStan\Type\Constant\ConstantStringType('EventArn'),
                new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('EndedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ClientLocation'),
                new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                new \PHPStan\Type\Constant\ConstantStringType('EventStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metro'),
                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                    new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                    new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                    new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                ]),
            ]),
        ]);
    }
    private function getMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitorName'),
                new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ModifiedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('ProcessingStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ProcessingStatusInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('MaxCityNetworksToMonitor'),
                new \PHPStan\Type\Constant\ConstantStringType('InternetMeasurementsLogDelivery'),
                new \PHPStan\Type\Constant\ConstantStringType('TrafficPercentageToMonitor'),
                new \PHPStan\Type\Constant\ConstantStringType('HealthEventsConfig'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OK'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COLLECTING_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAULT_SERVICE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAULT_ACCESS_CLOUDWATCH'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('S3Config'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BucketName'),
                        new \PHPStan\Type\Constant\ConstantStringType('BucketPrefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogDeliveryStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityScoreThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceScoreThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('AvailabilityLocalHealthEventsConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('PerformanceLocalHealthEventsConfig'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthScoreThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinTrafficImpact'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('HealthScoreThreshold'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinTrafficImpact'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getQueryResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Fields'),
                new \PHPStan\Type\Constant\ConstantStringType('Data'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getQueryStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                ]),
            ]),
        ]);
    }
    private function listHealthEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('HealthEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImpactedLocations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentOfTotalTrafficImpacted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImpactType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HealthScoreThreshold'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metro'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubdivisionCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('ServiceLocation'),
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('CausedBy'),
                        new \PHPStan\Type\Constant\ConstantStringType('InternetHealth'),
                        new \PHPStan\Type\Constant\ConstantStringType('Ipv4Prefixes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Networks'),
                            new \PHPStan\Type\Constant\ConstantStringType('AsPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('NetworkEventType'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AWS'),
                                new \PHPStan\Type\Constant\ConstantStringType('Internet'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Availability'),
                            new \PHPStan\Type\Constant\ConstantStringType('Performance'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExperienceScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('PercentOfTotalTrafficImpacted'),
                                new \PHPStan\Type\Constant\ConstantStringType('PercentOfClientLocationImpacted'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ExperienceScore'),
                                new \PHPStan\Type\Constant\ConstantStringType('PercentOfTotalTrafficImpacted'),
                                new \PHPStan\Type\Constant\ConstantStringType('PercentOfClientLocationImpacted'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundTripTime'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('P50'),
                                    new \PHPStan\Type\Constant\ConstantStringType('P90'),
                                    new \PHPStan\Type\Constant\ConstantStringType('P95'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL_AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('LOCAL_PERFORMANCE'),
                    ]),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInternetEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InternetEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientLocation'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ASName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ASNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Subdivision'),
                        new \PHPStan\Type\Constant\ConstantStringType('Metro'),
                        new \PHPStan\Type\Constant\ConstantStringType('City'),
                        new \PHPStan\Type\Constant\ConstantStringType('Latitude'),
                        new \PHPStan\Type\Constant\ConstantStringType('Longitude'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABILITY'),
                        new \PHPStan\Type\Constant\ConstantStringType('PERFORMANCE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMonitors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Monitors'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MonitorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProcessingStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('OK'),
                        new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COLLECTING_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('INSUFFICIENT_DATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT_SERVICE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAULT_ACCESS_CLOUDWATCH'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
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
    private function startQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopQuery(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
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
    private function updateMonitor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MonitorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
}