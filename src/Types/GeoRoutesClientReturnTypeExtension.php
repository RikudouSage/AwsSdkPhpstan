<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GeoRoutesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GeoRoutes\GeoRoutesClient>
     */
    public function getClass(): string
    {
        return \Aws\GeoRoutes\GeoRoutesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'calculateIsolines',
            'calculateRouteMatrix',
            'calculateRoutes',
            'optimizeWaypoints',
            'snapToRoads',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'calculateIsolines' => $this->calculateIsolines(),
            'calculateRouteMatrix' => $this->calculateRouteMatrix(),
            'calculateRoutes' => $this->calculateRoutes(),
            'optimizeWaypoints' => $this->optimizeWaypoints(),
            'snapToRoads' => $this->snapToRoads(),
        };
    }
    private function calculateIsolines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ArrivalTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DepartureTime'),
                new \PHPStan\Type\Constant\ConstantStringType('IsolineGeometryFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('Isolines'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedDestination'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedOrigin'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlexiblePolyline'),
                    new \PHPStan\Type\Constant\ConstantStringType('Simple'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Connections'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistanceThreshold'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometries'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeThreshold'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FromPolygonIndex'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('ToPolygonIndex'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LineString'),
                            new \PHPStan\Type\Constant\ConstantStringType('Polyline'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                        new \PHPStan\Type\Constant\ConstantStringType('PolylinePolygon'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
            ]),
        ]);
    }
    private function calculateRouteMatrix(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('RouteMatrix'),
                new \PHPStan\Type\Constant\ConstantStringType('RoutingBoundary'),
            ], [
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NoMatch'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoMatchDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoMatchOrigin'),
                        new \PHPStan\Type\Constant\ConstantStringType('NoRoute'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutOfBounds'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutOfBoundsDestination'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutOfBoundsOrigin'),
                        new \PHPStan\Type\Constant\ConstantStringType('Other'),
                        new \PHPStan\Type\Constant\ConstantStringType('Violation'),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unbounded'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AutoCircle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Circle'),
                        new \PHPStan\Type\Constant\ConstantStringType('BoundingBox'),
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Margin'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxRadius'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Center'),
                            new \PHPStan\Type\Constant\ConstantStringType('Radius'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                ]),
            ]),
        ]);
    }
    private function calculateRoutes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LegGeometryFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('Notices'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('Routes'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlexiblePolyline'),
                    new \PHPStan\Type\Constant\ConstantStringType('Simple'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MainLanguageNotFound'),
                        new \PHPStan\Type\Constant\ConstantStringType('Other'),
                        new \PHPStan\Type\Constant\ConstantStringType('TravelTimeExceedsDriverWorkHours'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('High'),
                        new \PHPStan\Type\Constant\ConstantStringType('Low'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Legs'),
                    new \PHPStan\Type\Constant\ConstantStringType('MajorRoadLabels'),
                    new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FerryLegDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        new \PHPStan\Type\Constant\ConstantStringType('PedestrianLegDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('TravelMode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('VehicleLegDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AfterTravelSteps'),
                            new \PHPStan\Type\Constant\ConstantStringType('Arrival'),
                            new \PHPStan\Type\Constant\ConstantStringType('BeforeTravelSteps'),
                            new \PHPStan\Type\Constant\ConstantStringType('Departure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Notices'),
                            new \PHPStan\Type\Constant\ConstantStringType('PassThroughWaypoints'),
                            new \PHPStan\Type\Constant\ConstantStringType('RouteName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Spans'),
                            new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                            new \PHPStan\Type\Constant\ConstantStringType('TravelSteps'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instruction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('Deboard'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instruction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantStringType('Board'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccuratePolylineUnavailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NoSchedule'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Other'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidFerry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidRailFerry'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SeasonalClosure'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('High'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Names'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                                new \PHPStan\Type\Constant\ConstantStringType('TravelOnly'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instruction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Depart'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Arrive'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LineString'),
                            new \PHPStan\Type\Constant\ConstantStringType('Polyline'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arrival'),
                            new \PHPStan\Type\Constant\ConstantStringType('Departure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Notices'),
                            new \PHPStan\Type\Constant\ConstantStringType('PassThroughWaypoints'),
                            new \PHPStan\Type\Constant\ConstantStringType('Spans'),
                            new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                            new \PHPStan\Type\Constant\ConstantStringType('TravelSteps'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SideOfStreet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SideOfStreet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccuratePolylineUnavailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Other'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidDirtRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidTunnel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedPedestrianOption'),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('High'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BestCaseDuration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('DynamicSpeed'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionalClassification'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Incidents'),
                                new \PHPStan\Type\Constant\ConstantStringType('Names'),
                                new \PHPStan\Type\Constant\ConstantStringType('PedestrianAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoadAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteNumbers'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpeedLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('TypicalDuration'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BestCaseSpeed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TypicalSpeed'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Allowed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Indoors'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NoThroughTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Park'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Stairs'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollRoad'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bridge'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuiltUpArea'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ControlledAccessHighway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DirtRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DividedRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Motorway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ramp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RightHandTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Roundabout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tunnel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnderConstruction'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('East'),
                                        new \PHPStan\Type\Constant\ConstantStringType('North'),
                                        new \PHPStan\Type\Constant\ConstantStringType('South'),
                                        new \PHPStan\Type\Constant\ConstantStringType('West'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxSpeed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unlimited'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                                new \PHPStan\Type\Constant\ConstantStringType('TravelOnly'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContinueStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentRoad'),
                                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExitNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instruction'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeepStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('NextRoad'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundaboutEnterStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundaboutExitStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundaboutPassStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('Signpost'),
                                new \PHPStan\Type\Constant\ConstantStringType('TurnStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoadName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Towards'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('East'),
                                            new \PHPStan\Type\Constant\ConstantStringType('North'),
                                            new \PHPStan\Type\Constant\ConstantStringType('South'),
                                            new \PHPStan\Type\Constant\ConstantStringType('West'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Highway'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Urban'),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoadName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Towards'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('East'),
                                            new \PHPStan\Type\Constant\ConstantStringType('North'),
                                            new \PHPStan\Type\Constant\ConstantStringType('South'),
                                            new \PHPStan\Type\Constant\ConstantStringType('West'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Highway'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Urban'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RelativeExit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('East'),
                                                new \PHPStan\Type\Constant\ConstantStringType('North'),
                                                new \PHPStan\Type\Constant\ConstantStringType('South'),
                                                new \PHPStan\Type\Constant\ConstantStringType('West'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arrive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Depart'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Keep'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutEnter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutExit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutPass'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Turn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Exit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ramp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UTurn'),
                                ]),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Car'),
                            new \PHPStan\Type\Constant\ConstantStringType('Ferry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pedestrian'),
                            new \PHPStan\Type\Constant\ConstantStringType('Scooter'),
                            new \PHPStan\Type\Constant\ConstantStringType('Truck'),
                            new \PHPStan\Type\Constant\ConstantStringType('CarShuttleTrain'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Ferry'),
                            new \PHPStan\Type\Constant\ConstantStringType('Pedestrian'),
                            new \PHPStan\Type\Constant\ConstantStringType('Vehicle'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arrival'),
                            new \PHPStan\Type\Constant\ConstantStringType('Departure'),
                            new \PHPStan\Type\Constant\ConstantStringType('Incidents'),
                            new \PHPStan\Type\Constant\ConstantStringType('Notices'),
                            new \PHPStan\Type\Constant\ConstantStringType('PassThroughWaypoints'),
                            new \PHPStan\Type\Constant\ConstantStringType('Spans'),
                            new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tolls'),
                            new \PHPStan\Type\Constant\ConstantStringType('TollSystems'),
                            new \PHPStan\Type\Constant\ConstantStringType('TravelSteps'),
                            new \PHPStan\Type\Constant\ConstantStringType('TruckRoadTypes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Zones'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SideOfStreet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                                new \PHPStan\Type\Constant\ConstantStringType('Time'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SideOfStreet'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Severity'),
                                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Critical'),
                                    new \PHPStan\Type\Constant\ConstantStringType('High'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Medium'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Accident'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Congestion'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Construction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DisabledVehicle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LaneRestriction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('MassTransit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Other'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PlannedEvent'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoadClosure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoadHazard'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Weather'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Details'),
                                new \PHPStan\Type\Constant\ConstantStringType('Impact'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('AccuratePolylineUnavailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Other'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PotentialViolatedAvoidTollRoadUsage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PotentialViolatedCarpoolUsage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PotentialViolatedTurnRestrictionUsage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PotentialViolatedVehicleRestrictionUsage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PotentialViolatedZoneRestrictionUsage'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SeasonalClosure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollsDataTemporarilyUnavailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollsDataUnavailable'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollTransponder'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidControlledAccessHighway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidDifficultTurns'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidDirtRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidSeasonalClosure'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidTollRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidTollTransponder'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidTruckRoadType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidTunnel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedAvoidUTurns'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedBlockedRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedCarpool'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedEmergencyGate'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedStartDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedTurnRestriction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedVehicleRestriction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedZoneRestriction'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ViolatedConstraints'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('AllHazardsRestricted'),
                                        new \PHPStan\Type\Constant\ConstantStringType('AxleCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('HazardousCargos'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxHeight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxKpraLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxPayloadCapacity'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxWeight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxWeightPerAxle'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxWeightPerAxleGroup'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MaxWidth'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Occupancy'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RestrictedTimes'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TimeDependent'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TrailerCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TravelMode'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TruckRoadType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TruckType'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TunnelRestrictionCode'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Combustible'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Corrosive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Explosive'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Flammable'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Gas'),
                                            new \PHPStan\Type\Constant\ConstantStringType('HarmfulToWater'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Organic'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Other'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Poison'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PoisonousInhalation'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Radioactive'),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Current'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Gross'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Unknown'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Single'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Tandem'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Triple'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Quad'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Quint'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\IntegerType(),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('LightTruck'),
                                            new \PHPStan\Type\Constant\ConstantStringType('StraightTruck'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Tractor'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('High'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Low'),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Place'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                    new \PHPStan\Type\Constant\ConstantStringType('WaypointIndex'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BestCaseDuration'),
                                new \PHPStan\Type\Constant\ConstantStringType('CarAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('DynamicSpeed'),
                                new \PHPStan\Type\Constant\ConstantStringType('FunctionalClassification'),
                                new \PHPStan\Type\Constant\ConstantStringType('Gate'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Incidents'),
                                new \PHPStan\Type\Constant\ConstantStringType('Names'),
                                new \PHPStan\Type\Constant\ConstantStringType('Notices'),
                                new \PHPStan\Type\Constant\ConstantStringType('RailwayCrossing'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoadAttributes'),
                                new \PHPStan\Type\Constant\ConstantStringType('RouteNumbers'),
                                new \PHPStan\Type\Constant\ConstantStringType('ScooterAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('SpeedLimit'),
                                new \PHPStan\Type\Constant\ConstantStringType('TollSystems'),
                                new \PHPStan\Type\Constant\ConstantStringType('TruckAccess'),
                                new \PHPStan\Type\Constant\ConstantStringType('TruckRoadTypes'),
                                new \PHPStan\Type\Constant\ConstantStringType('TypicalDuration'),
                                new \PHPStan\Type\Constant\ConstantStringType('Zones'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Allowed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NoThroughTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollRoad'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BestCaseSpeed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TypicalSpeed'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Emergency'),
                                    new \PHPStan\Type\Constant\ConstantStringType('KeyAccess'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PermissionRequired'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Protected'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unprotected'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Bridge'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BuiltUpArea'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ControlledAccessHighway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DirtRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DividedRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Motorway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PrivateRoad'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ramp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RightHandTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Roundabout'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tunnel'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UnderConstruction'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('East'),
                                        new \PHPStan\Type\Constant\ConstantStringType('North'),
                                        new \PHPStan\Type\Constant\ConstantStringType('South'),
                                        new \PHPStan\Type\Constant\ConstantStringType('West'),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Allowed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NoThroughTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollRoad'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('MaxSpeed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Unlimited'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\BooleanType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Allowed'),
                                    new \PHPStan\Type\Constant\ConstantStringType('NoThroughTraffic'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TollRoad'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Overview'),
                                new \PHPStan\Type\Constant\ConstantStringType('TravelOnly'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BestCaseDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TypicalDuration'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BestCaseDuration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TypicalDuration'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('PaymentSites'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rates'),
                                new \PHPStan\Type\Constant\ConstantStringType('Systems'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('ApplicableTimes'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ConvertedPrice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                    new \PHPStan\Type\Constant\ConstantStringType('LocalPrice'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Pass'),
                                    new \PHPStan\Type\Constant\ConstantStringType('PaymentMethods'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Transponders'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Estimate'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PerDuration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RangeValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Estimate'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PerDuration'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                        new \PHPStan\Type\Constant\ConstantStringType('RangeValue'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                        ], [
                                            new \PHPStan\Type\FloatType(),
                                            new \PHPStan\Type\FloatType(),
                                        ]),
                                        new \PHPStan\Type\FloatType(),
                                    ]),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('IncludesReturnTrip'),
                                        new \PHPStan\Type\Constant\ConstantStringType('SeniorPass'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TransferCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TripCount'),
                                        new \PHPStan\Type\Constant\ConstantStringType('ValidityPeriod'),
                                    ], [
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\BooleanType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\IntegerType(),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Period'),
                                            new \PHPStan\Type\Constant\ConstantStringType('PeriodCount'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('Annual'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Days'),
                                                new \PHPStan\Type\Constant\ConstantStringType('ExtendedAnnual'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Minutes'),
                                                new \PHPStan\Type\Constant\ConstantStringType('Months'),
                                            ]),
                                            new \PHPStan\Type\IntegerType(),
                                        ]),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('BankCard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Cash'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CashExact'),
                                        new \PHPStan\Type\Constant\ConstantStringType('CreditCard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('PassSubscription'),
                                        new \PHPStan\Type\Constant\ConstantStringType('TravelCard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Transponder'),
                                        new \PHPStan\Type\Constant\ConstantStringType('VideoToll'),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('SystemName'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ContinueHighwayStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('ContinueStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('CurrentRoad'),
                                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                                new \PHPStan\Type\Constant\ConstantStringType('EnterHighwayStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExitNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('ExitStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                                new \PHPStan\Type\Constant\ConstantStringType('Instruction'),
                                new \PHPStan\Type\Constant\ConstantStringType('KeepStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('NextRoad'),
                                new \PHPStan\Type\Constant\ConstantStringType('RampStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundaboutEnterStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundaboutExitStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('RoundaboutPassStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('Signpost'),
                                new \PHPStan\Type\Constant\ConstantStringType('TurnStepDetails'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('UTurnStepDetails'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoadName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Towards'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('East'),
                                            new \PHPStan\Type\Constant\ConstantStringType('North'),
                                            new \PHPStan\Type\Constant\ConstantStringType('South'),
                                            new \PHPStan\Type\Constant\ConstantStringType('West'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Highway'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Urban'),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RelativeExit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('RoadName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Towards'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\UnionType([
                                            new \PHPStan\Type\Constant\ConstantStringType('East'),
                                            new \PHPStan\Type\Constant\ConstantStringType('North'),
                                            new \PHPStan\Type\Constant\ConstantStringType('South'),
                                            new \PHPStan\Type\Constant\ConstantStringType('West'),
                                        ]),
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Highway'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Urban'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RelativeExit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Labels'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Text'),
                                    ], [
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\UnionType([
                                                new \PHPStan\Type\Constant\ConstantStringType('East'),
                                                new \PHPStan\Type\Constant\ConstantStringType('North'),
                                                new \PHPStan\Type\Constant\ConstantStringType('South'),
                                                new \PHPStan\Type\Constant\ConstantStringType('West'),
                                            ]),
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                        new \PHPStan\Type\Constant\ConstantArrayType([
                                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                        ], [
                                            new \PHPStan\Type\StringType(),
                                            new \PHPStan\Type\StringType(),
                                        ]),
                                    ]),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Arrive'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Continue'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ContinueHighway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Depart'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EnterHighway'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Exit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Keep'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Ramp'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutEnter'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutExit'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RoundaboutPass'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Turn'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UTurn'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('SteeringDirection'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnAngle'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TurnIntensity'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantArrayType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    ], [
                                        new \PHPStan\Type\StringType(),
                                        new \PHPStan\Type\StringType(),
                                    ]),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Left'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Right'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Straight'),
                                    ]),
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('Sharp'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Slight'),
                                        new \PHPStan\Type\Constant\ConstantStringType('Typical'),
                                    ]),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Category'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('CongestionPricing'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Environmental'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Vignette'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RoadName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RouteNumber'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('East'),
                                new \PHPStan\Type\Constant\ConstantStringType('North'),
                                new \PHPStan\Type\Constant\ConstantStringType('South'),
                                new \PHPStan\Type\Constant\ConstantStringType('West'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Tolls'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Total'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Currency'),
                                new \PHPStan\Type\Constant\ConstantStringType('Estimate'),
                                new \PHPStan\Type\Constant\ConstantStringType('Range'),
                                new \PHPStan\Type\Constant\ConstantStringType('RangeValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Min'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Max'),
                                ], [
                                    new \PHPStan\Type\FloatType(),
                                    new \PHPStan\Type\FloatType(),
                                ]),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function optimizeWaypoints(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Connections'),
                new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                new \PHPStan\Type\Constant\ConstantStringType('Duration'),
                new \PHPStan\Type\Constant\ConstantStringType('ImpedingWaypoints'),
                new \PHPStan\Type\Constant\ConstantStringType('OptimizedWaypoints'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeBreakdown'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('From'),
                    new \PHPStan\Type\Constant\ConstantStringType('RestDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('To'),
                    new \PHPStan\Type\Constant\ConstantStringType('TravelDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('WaitDuration'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('FailedConstraints'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Constraint'),
                        new \PHPStan\Type\Constant\ConstantStringType('Reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessHours'),
                            new \PHPStan\Type\Constant\ConstantStringType('AppointmentTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('Before'),
                            new \PHPStan\Type\Constant\ConstantStringType('Heading'),
                            new \PHPStan\Type\Constant\ConstantStringType('ServiceDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('SideOfStreet'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ArrivalTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClusterIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('DepartureTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RestDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('TravelDuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('WaitDuration'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function snapToRoads(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Notices'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedGeometry'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedGeometryFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedTracePoints'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Code'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('TracePointIndexes'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsHeadingIgnored'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsIgnored'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsMovedByLargeDistance'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsNotMatched'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsOutOfSequence'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsSpeedEstimated'),
                        new \PHPStan\Type\Constant\ConstantStringType('TracePointsSpeedIgnored'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LineString'),
                    new \PHPStan\Type\Constant\ConstantStringType('Polyline'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('FlexiblePolyline'),
                    new \PHPStan\Type\Constant\ConstantStringType('Simple'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Confidence'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalPosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('SnappedPosition'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                ]),
            ]),
        ]);
    }
}