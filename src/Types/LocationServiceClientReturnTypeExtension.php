<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LocationServiceClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LocationService\LocationServiceClient>
     */
    public function getClass(): string
    {
        return \Aws\LocationService\LocationServiceClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateTrackerConsumer',
            'batchDeleteDevicePositionHistory',
            'batchDeleteGeofence',
            'batchEvaluateGeofences',
            'batchGetDevicePosition',
            'batchPutGeofence',
            'batchUpdateDevicePosition',
            'calculateRoute',
            'calculateRouteMatrix',
            'createGeofenceCollection',
            'createKey',
            'createMap',
            'createPlaceIndex',
            'createRouteCalculator',
            'createTracker',
            'deleteGeofenceCollection',
            'deleteKey',
            'deleteMap',
            'deletePlaceIndex',
            'deleteRouteCalculator',
            'deleteTracker',
            'describeGeofenceCollection',
            'describeKey',
            'describeMap',
            'describePlaceIndex',
            'describeRouteCalculator',
            'describeTracker',
            'disassociateTrackerConsumer',
            'forecastGeofenceEvents',
            'getDevicePosition',
            'getDevicePositionHistory',
            'getGeofence',
            'getMapGlyphs',
            'getMapSprites',
            'getMapStyleDescriptor',
            'getMapTile',
            'getPlace',
            'listDevicePositions',
            'listGeofenceCollections',
            'listGeofences',
            'listKeys',
            'listMaps',
            'listPlaceIndexes',
            'listRouteCalculators',
            'listTagsForResource',
            'listTrackerConsumers',
            'listTrackers',
            'putGeofence',
            'searchPlaceIndexForPosition',
            'searchPlaceIndexForSuggestions',
            'searchPlaceIndexForText',
            'tagResource',
            'untagResource',
            'updateGeofenceCollection',
            'updateKey',
            'updateMap',
            'updatePlaceIndex',
            'updateRouteCalculator',
            'updateTracker',
            'verifyDevicePosition',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateTrackerConsumer' => $this->associateTrackerConsumer(),
            'batchDeleteDevicePositionHistory' => $this->batchDeleteDevicePositionHistory(),
            'batchDeleteGeofence' => $this->batchDeleteGeofence(),
            'batchEvaluateGeofences' => $this->batchEvaluateGeofences(),
            'batchGetDevicePosition' => $this->batchGetDevicePosition(),
            'batchPutGeofence' => $this->batchPutGeofence(),
            'batchUpdateDevicePosition' => $this->batchUpdateDevicePosition(),
            'calculateRoute' => $this->calculateRoute(),
            'calculateRouteMatrix' => $this->calculateRouteMatrix(),
            'createGeofenceCollection' => $this->createGeofenceCollection(),
            'createKey' => $this->createKey(),
            'createMap' => $this->createMap(),
            'createPlaceIndex' => $this->createPlaceIndex(),
            'createRouteCalculator' => $this->createRouteCalculator(),
            'createTracker' => $this->createTracker(),
            'deleteGeofenceCollection' => $this->deleteGeofenceCollection(),
            'deleteKey' => $this->deleteKey(),
            'deleteMap' => $this->deleteMap(),
            'deletePlaceIndex' => $this->deletePlaceIndex(),
            'deleteRouteCalculator' => $this->deleteRouteCalculator(),
            'deleteTracker' => $this->deleteTracker(),
            'describeGeofenceCollection' => $this->describeGeofenceCollection(),
            'describeKey' => $this->describeKey(),
            'describeMap' => $this->describeMap(),
            'describePlaceIndex' => $this->describePlaceIndex(),
            'describeRouteCalculator' => $this->describeRouteCalculator(),
            'describeTracker' => $this->describeTracker(),
            'disassociateTrackerConsumer' => $this->disassociateTrackerConsumer(),
            'forecastGeofenceEvents' => $this->forecastGeofenceEvents(),
            'getDevicePosition' => $this->getDevicePosition(),
            'getDevicePositionHistory' => $this->getDevicePositionHistory(),
            'getGeofence' => $this->getGeofence(),
            'getMapGlyphs' => $this->getMapGlyphs(),
            'getMapSprites' => $this->getMapSprites(),
            'getMapStyleDescriptor' => $this->getMapStyleDescriptor(),
            'getMapTile' => $this->getMapTile(),
            'getPlace' => $this->getPlace(),
            'listDevicePositions' => $this->listDevicePositions(),
            'listGeofenceCollections' => $this->listGeofenceCollections(),
            'listGeofences' => $this->listGeofences(),
            'listKeys' => $this->listKeys(),
            'listMaps' => $this->listMaps(),
            'listPlaceIndexes' => $this->listPlaceIndexes(),
            'listRouteCalculators' => $this->listRouteCalculators(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTrackerConsumers' => $this->listTrackerConsumers(),
            'listTrackers' => $this->listTrackers(),
            'putGeofence' => $this->putGeofence(),
            'searchPlaceIndexForPosition' => $this->searchPlaceIndexForPosition(),
            'searchPlaceIndexForSuggestions' => $this->searchPlaceIndexForSuggestions(),
            'searchPlaceIndexForText' => $this->searchPlaceIndexForText(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateGeofenceCollection' => $this->updateGeofenceCollection(),
            'updateKey' => $this->updateKey(),
            'updateMap' => $this->updateMap(),
            'updatePlaceIndex' => $this->updatePlaceIndex(),
            'updateRouteCalculator' => $this->updateRouteCalculator(),
            'updateTracker' => $this->updateTracker(),
            'verifyDevicePosition' => $this->verifyDevicePosition(),
        };
    }
    private function associateTrackerConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchDeleteDevicePositionHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchDeleteGeofence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchEvaluateGeofences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchGetDevicePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('DevicePositions'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceivedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                    new \PHPStan\Type\Constant\ConstantStringType('PositionProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function batchPutGeofence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Successes'),
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function batchUpdateDevicePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AccessDeniedError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ConflictError'),
                            new \PHPStan\Type\Constant\ConstantStringType('InternalServerError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceNotFoundError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ThrottlingError'),
                            new \PHPStan\Type\Constant\ConstantStringType('ValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function calculateRoute(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Legs'),
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StartPosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndPosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Steps'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LineString'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StartPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('EndPosition'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                        new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('GeometryOffset'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RouteBBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistanceUnit'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kilometers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Miles'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function calculateRouteMatrix(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RouteMatrix'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedDeparturePositions'),
                new \PHPStan\Type\Constant\ConstantStringType('SnappedDestinationPositions'),
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('DurationSeconds'),
                    new \PHPStan\Type\Constant\ConstantStringType('Error'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RouteNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('RouteTooLong'),
                            new \PHPStan\Type\Constant\ConstantStringType('PositionsNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('DestinationPositionNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeparturePositionNotFound'),
                            new \PHPStan\Type\Constant\ConstantStringType('OtherValidationError'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('RouteCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistanceUnit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Kilometers'),
                        new \PHPStan\Type\Constant\ConstantStringType('Miles'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createGeofenceCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('CollectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createMap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MapName'),
                new \PHPStan\Type\Constant\ConstantStringType('MapArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createPlaceIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createRouteCalculator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatorName'),
                new \PHPStan\Type\Constant\ConstantStringType('CalculatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function createTracker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrackerName'),
                new \PHPStan\Type\Constant\ConstantStringType('TrackerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function deleteGeofenceCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteMap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePlaceIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteRouteCalculator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTracker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeGeofenceCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('CollectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlanDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('GeofenceCount'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Key'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExpireTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AllowActions'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('AllowReferers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeMap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MapName'),
                new \PHPStan\Type\Constant\ConstantStringType('MapArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Style'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                    new \PHPStan\Type\Constant\ConstantStringType('CustomLayers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describePlaceIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSourceConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IntendedUse'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SingleUse'),
                        new \PHPStan\Type\Constant\ConstantStringType('Storage'),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeRouteCalculator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatorName'),
                new \PHPStan\Type\Constant\ConstantStringType('CalculatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function describeTracker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrackerName'),
                new \PHPStan\Type\Constant\ConstantStringType('TrackerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingPlanDataSource'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyId'),
                new \PHPStan\Type\Constant\ConstantStringType('PositionFiltering'),
                new \PHPStan\Type\Constant\ConstantStringType('EventBridgeEnabled'),
                new \PHPStan\Type\Constant\ConstantStringType('KmsKeyEnableGeospatialQueries'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                    new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('TimeBased'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistanceBased'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccuracyBased'),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function disassociateTrackerConsumer(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function forecastGeofenceEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ForecastedEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('DistanceUnit'),
                new \PHPStan\Type\Constant\ConstantStringType('SpeedUnit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDeviceInGeofence'),
                    new \PHPStan\Type\Constant\ConstantStringType('NearestDistance'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ForecastedBreachTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENTER'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IDLE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Kilometers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Miles'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('KilometersPerHour'),
                    new \PHPStan\Type\Constant\ConstantStringType('MilesPerHour'),
                ]),
            ]),
        ]);
    }
    private function getDevicePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ReceivedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Position'),
                new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                new \PHPStan\Type\Constant\ConstantStringType('PositionProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                ], [
                    new \PHPStan\Type\FloatType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDevicePositionHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('DevicePositions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceivedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                    new \PHPStan\Type\Constant\ConstantStringType('PositionProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGeofence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('GeofenceProperties'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                    new \PHPStan\Type\Constant\ConstantStringType('Circle'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geobuf'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Center'),
                        new \PHPStan\Type\Constant\ConstantStringType('Radius'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ResourceType(),
                        new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getMapGlyphs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blob'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMapSprites(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blob'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMapStyleDescriptor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blob'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getMapTile(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Blob'),
                new \PHPStan\Type\Constant\ConstantStringType('ContentType'),
                new \PHPStan\Type\Constant\ConstantStringType('CacheControl'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getPlace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Place'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Street'),
                    new \PHPStan\Type\Constant\ConstantStringType('Neighborhood'),
                    new \PHPStan\Type\Constant\ConstantStringType('Municipality'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Interpolated'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnitType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UnitNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupplementalCategories'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubMunicipality'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Point'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listDevicePositions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                    new \PHPStan\Type\Constant\ConstantStringType('PositionProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGeofenceCollections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlanDataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGeofences(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeofenceProperties'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Polygon'),
                        new \PHPStan\Type\Constant\ConstantStringType('Circle'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geobuf'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Center'),
                            new \PHPStan\Type\Constant\ConstantStringType('Radius'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listKeys(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpireTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Restrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowActions'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowResources'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowReferers'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listMaps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('MapName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPlaceIndexes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRouteCalculators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CalculatorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function listTrackerConsumers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConsumerArns'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTrackers(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Entries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TrackerName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlan'),
                    new \PHPStan\Type\Constant\ConstantStringType('PricingPlanDataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RequestBasedUsage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetTracking'),
                        new \PHPStan\Type\Constant\ConstantStringType('MobileAssetManagement'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putGeofence(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeofenceId'),
                new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function searchPlaceIndexForPosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Place'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('Neighborhood'),
                        new \PHPStan\Type\Constant\ConstantStringType('Municipality'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interpolated'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnitType'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnitNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupplementalCategories'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubMunicipality'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Point'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function searchPlaceIndexForSuggestions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('BiasPosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterBBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterCountries'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterCategories'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupplementalCategories'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function searchPlaceIndexForText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summary'),
                new \PHPStan\Type\Constant\ConstantStringType('Results'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Text'),
                    new \PHPStan\Type\Constant\ConstantStringType('BiasPosition'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterBBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterCountries'),
                    new \PHPStan\Type\Constant\ConstantStringType('MaxResults'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResultBBox'),
                    new \PHPStan\Type\Constant\ConstantStringType('DataSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                    new \PHPStan\Type\Constant\ConstantStringType('FilterCategories'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Place'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('Relevance'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Geometry'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('Neighborhood'),
                        new \PHPStan\Type\Constant\ConstantStringType('Municipality'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Interpolated'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnitType'),
                        new \PHPStan\Type\Constant\ConstantStringType('UnitNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupplementalCategories'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubMunicipality'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Point'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\StringType(),
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
    private function updateGeofenceCollection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CollectionName'),
                new \PHPStan\Type\Constant\ConstantStringType('CollectionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateKey(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('KeyArn'),
                new \PHPStan\Type\Constant\ConstantStringType('KeyName'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateMap(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('MapName'),
                new \PHPStan\Type\Constant\ConstantStringType('MapArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updatePlaceIndex(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('IndexName'),
                new \PHPStan\Type\Constant\ConstantStringType('IndexArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateRouteCalculator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CalculatorName'),
                new \PHPStan\Type\Constant\ConstantStringType('CalculatorArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function updateTracker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TrackerName'),
                new \PHPStan\Type\Constant\ConstantStringType('TrackerArn'),
                new \PHPStan\Type\Constant\ConstantStringType('UpdateTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function verifyDevicePosition(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('InferredState'),
                new \PHPStan\Type\Constant\ConstantStringType('DeviceId'),
                new \PHPStan\Type\Constant\ConstantStringType('SampleTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ReceivedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('DistanceUnit'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Accuracy'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeviationDistance'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProxyDetected'),
                ], [
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Horizontal'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                    ]),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Kilometers'),
                    new \PHPStan\Type\Constant\ConstantStringType('Miles'),
                ]),
            ]),
        ]);
    }
}