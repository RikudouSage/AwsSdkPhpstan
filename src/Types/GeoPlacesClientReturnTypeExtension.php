<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GeoPlacesClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GeoPlaces\GeoPlacesClient>
     */
    public function getClass(): string
    {
        return \Aws\GeoPlaces\GeoPlacesClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'autocomplete',
            'geocode',
            'getPlace',
            'reverseGeocode',
            'searchNearby',
            'searchText',
            'suggest',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'autocomplete' => $this->autocomplete(),
            'geocode' => $this->geocode(),
            'getPlace' => $this->getPlace(),
            'reverseGeocode' => $this->reverseGeocode(),
            'searchNearby' => $this->searchNearby(),
            'searchText' => $this->searchText(),
            'suggest' => $this->suggest(),
        };
    }
    private function autocomplete(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                            new \PHPStan\Type\Constant\ConstantStringType('District'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                            new \PHPStan\Type\Constant\ConstantStringType('Street'),
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('Building'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                ])),
                            ]),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ]))),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function geocode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressNumberCorrected'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCodeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('MapView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('FoodTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                    new \PHPStan\Type\Constant\ConstantStringType('MatchScores'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalAuthority'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('UspsZip'),
                        new \PHPStan\Type\Constant\ConstantStringType('UspsZipPlus4'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Usps'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UspsZip'),
                            new \PHPStan\Type\Constant\ConstantStringType('UspsZipPlus4'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ZipClassificationCode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Military'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostOfficeBoxes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unique'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecordTypeCode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Firm'),
                                new \PHPStan\Type\Constant\ConstantStringType('General'),
                                new \PHPStan\Type\Constant\ConstantStringType('HighRise'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostOfficeBox'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                                new \PHPStan\Type\Constant\ConstantStringType('Street'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                        new \PHPStan\Type\Constant\ConstantStringType('OffsetSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Overall'),
                        new \PHPStan\Type\Constant\ConstantStringType('Components'),
                    ], [
                        new \PHPStan\Type\FloatType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                                new \PHPStan\Type\Constant\ConstantStringType('District'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                                new \PHPStan\Type\Constant\ConstantStringType('Block'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                                new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                                new \PHPStan\Type\Constant\ConstantStringType('Building'),
                            ], [
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\FloatType(),
                            ]),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getPlace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                new \PHPStan\Type\Constant\ConstantStringType('Title'),
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('Address'),
                new \PHPStan\Type\Constant\ConstantStringType('AddressNumberCorrected'),
                new \PHPStan\Type\Constant\ConstantStringType('PostalCodeDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('Position'),
                new \PHPStan\Type\Constant\ConstantStringType('MapView'),
                new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                new \PHPStan\Type\Constant\ConstantStringType('FoodTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('BusinessChains'),
                new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
                new \PHPStan\Type\Constant\ConstantStringType('OpeningHours'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                new \PHPStan\Type\Constant\ConstantStringType('AccessRestrictions'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                new \PHPStan\Type\Constant\ConstantStringType('Phonemes'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                    new \PHPStan\Type\Constant\ConstantStringType('District'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Block'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Street'),
                    new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                    new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Label'),
                    new \PHPStan\Type\Constant\ConstantStringType('Country'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                    new \PHPStan\Type\Constant\ConstantStringType('District'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('Block'),
                    new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                    new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                    new \PHPStan\Type\Constant\ConstantStringType('Street'),
                    new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Building'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                        new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                        new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                        new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalAuthority'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCodeType'),
                    new \PHPStan\Type\Constant\ConstantStringType('UspsZip'),
                    new \PHPStan\Type\Constant\ConstantStringType('UspsZipPlus4'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('Usps'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UspsZip'),
                        new \PHPStan\Type\Constant\ConstantStringType('UspsZipPlus4'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ZipClassificationCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Military'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostOfficeBoxes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Unique'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RecordTypeCode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Firm'),
                            new \PHPStan\Type\Constant\ConstantStringType('General'),
                            new \PHPStan\Type\Constant\ConstantStringType('HighRise'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostOfficeBox'),
                            new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                            new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Phones'),
                    new \PHPStan\Type\Constant\ConstantStringType('Faxes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Websites'),
                    new \PHPStan\Type\Constant\ConstantStringType('Emails'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Display'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpenNow'),
                    new \PHPStan\Type\Constant\ConstantStringType('Components'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenDuration'),
                        new \PHPStan\Type\Constant\ConstantStringType('Recurrence'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                    new \PHPStan\Type\Constant\ConstantStringType('OffsetSeconds'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ]),
                ]),
            ]),
        ]);
    }
    private function reverseGeocode(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressNumberCorrected'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCodeDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('MapView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('FoodTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalAuthority'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCodeType'),
                        new \PHPStan\Type\Constant\ConstantStringType('UspsZip'),
                        new \PHPStan\Type\Constant\ConstantStringType('UspsZipPlus4'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('Usps'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('UspsZip'),
                            new \PHPStan\Type\Constant\ConstantStringType('UspsZipPlus4'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ZipClassificationCode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Military'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostOfficeBoxes'),
                                new \PHPStan\Type\Constant\ConstantStringType('Unique'),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('RecordTypeCode'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Firm'),
                                new \PHPStan\Type\Constant\ConstantStringType('General'),
                                new \PHPStan\Type\Constant\ConstantStringType('HighRise'),
                                new \PHPStan\Type\Constant\ConstantStringType('PostOfficeBox'),
                                new \PHPStan\Type\Constant\ConstantStringType('Rural'),
                                new \PHPStan\Type\Constant\ConstantStringType('Street'),
                            ]),
                        ]),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                        new \PHPStan\Type\Constant\ConstantStringType('OffsetSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function searchNearby(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressNumberCorrected'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('MapView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('FoodTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessChains'),
                    new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpeningHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Phonemes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Phones'),
                        new \PHPStan\Type\Constant\ConstantStringType('Faxes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Websites'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Display'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Components'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recurrence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                        new \PHPStan\Type\Constant\ConstantStringType('OffsetSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                            new \PHPStan\Type\Constant\ConstantStringType('District'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchText(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressNumberCorrected'),
                    new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                    new \PHPStan\Type\Constant\ConstantStringType('MapView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    new \PHPStan\Type\Constant\ConstantStringType('FoodTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('BusinessChains'),
                    new \PHPStan\Type\Constant\ConstantStringType('Contacts'),
                    new \PHPStan\Type\Constant\ConstantStringType('OpeningHours'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccessRestrictions'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                    new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                    new \PHPStan\Type\Constant\ConstantStringType('Phonemes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                        new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        new \PHPStan\Type\Constant\ConstantStringType('Country'),
                        new \PHPStan\Type\Constant\ConstantStringType('Region'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                        new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                        new \PHPStan\Type\Constant\ConstantStringType('District'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                        new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                        new \PHPStan\Type\Constant\ConstantStringType('Block'),
                        new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                        new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                        new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                        new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('Building'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                            new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Code'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                            new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                            new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                            new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Phones'),
                        new \PHPStan\Type\Constant\ConstantStringType('Faxes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Websites'),
                        new \PHPStan\Type\Constant\ConstantStringType('Emails'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Display'),
                        new \PHPStan\Type\Constant\ConstantStringType('OpenNow'),
                        new \PHPStan\Type\Constant\ConstantStringType('Components'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('OpenTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('OpenDuration'),
                            new \PHPStan\Type\Constant\ConstantStringType('Recurrence'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Position'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                        new \PHPStan\Type\Constant\ConstantStringType('OffsetSeconds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                            new \PHPStan\Type\Constant\ConstantStringType('District'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('Street'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function suggest(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PricingBucket'),
                new \PHPStan\Type\Constant\ConstantStringType('ResultItems'),
                new \PHPStan\Type\Constant\ConstantStringType('QueryRefinements'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                    new \PHPStan\Type\Constant\ConstantStringType('SuggestResultItemType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Place'),
                    new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    new \PHPStan\Type\Constant\ConstantStringType('Highlights'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Place'),
                        new \PHPStan\Type\Constant\ConstantStringType('Query'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PlaceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PlaceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        new \PHPStan\Type\Constant\ConstantStringType('Position'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distance'),
                        new \PHPStan\Type\Constant\ConstantStringType('MapView'),
                        new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        new \PHPStan\Type\Constant\ConstantStringType('FoodTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('BusinessChains'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessPoints'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccessRestrictions'),
                        new \PHPStan\Type\Constant\ConstantStringType('TimeZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('PoliticalView'),
                        new \PHPStan\Type\Constant\ConstantStringType('Phonemes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                            new \PHPStan\Type\Constant\ConstantStringType('District'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                            new \PHPStan\Type\Constant\ConstantStringType('Street'),
                            new \PHPStan\Type\Constant\ConstantStringType('PointOfInterest'),
                            new \PHPStan\Type\Constant\ConstantStringType('PointAddress'),
                            new \PHPStan\Type\Constant\ConstantStringType('InterpolatedAddress'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                            new \PHPStan\Type\Constant\ConstantStringType('Country'),
                            new \PHPStan\Type\Constant\ConstantStringType('Region'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                            new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                            new \PHPStan\Type\Constant\ConstantStringType('District'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                            new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                            new \PHPStan\Type\Constant\ConstantStringType('Block'),
                            new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                            new \PHPStan\Type\Constant\ConstantStringType('Intersection'),
                            new \PHPStan\Type\Constant\ConstantStringType('Street'),
                            new \PHPStan\Type\Constant\ConstantStringType('StreetComponents'),
                            new \PHPStan\Type\Constant\ConstantStringType('AddressNumber'),
                            new \PHPStan\Type\Constant\ConstantStringType('Building'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code2'),
                                new \PHPStan\Type\Constant\ConstantStringType('Code3'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Code'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('BaseName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                                new \PHPStan\Type\Constant\ConstantStringType('TypePlacement'),
                                new \PHPStan\Type\Constant\ConstantStringType('TypeSeparator'),
                                new \PHPStan\Type\Constant\ConstantStringType('Prefix'),
                                new \PHPStan\Type\Constant\ConstantStringType('Suffix'),
                                new \PHPStan\Type\Constant\ConstantStringType('Direction'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('BeforeBaseName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AfterBaseName'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                            new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Position'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\FloatType()),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Restricted'),
                            new \PHPStan\Type\Constant\ConstantStringType('Categories'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('LocalizedName'),
                                new \PHPStan\Type\Constant\ConstantStringType('Primary'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('Offset'),
                            new \PHPStan\Type\Constant\ConstantStringType('OffsetSeconds'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Title'),
                            new \PHPStan\Type\Constant\ConstantStringType('Address'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ])),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Country'),
                                new \PHPStan\Type\Constant\ConstantStringType('Region'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubRegion'),
                                new \PHPStan\Type\Constant\ConstantStringType('Locality'),
                                new \PHPStan\Type\Constant\ConstantStringType('District'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubDistrict'),
                                new \PHPStan\Type\Constant\ConstantStringType('Block'),
                                new \PHPStan\Type\Constant\ConstantStringType('SubBlock'),
                                new \PHPStan\Type\Constant\ConstantStringType('Street'),
                            ], [
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Language'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Preferred'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\BooleanType(),
                                ])),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('QueryId'),
                        new \PHPStan\Type\Constant\ConstantStringType('QueryType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Category'),
                            new \PHPStan\Type\Constant\ConstantStringType('BusinessChain'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Title'),
                        new \PHPStan\Type\Constant\ConstantStringType('Address'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                            new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                            new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Label'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                                new \PHPStan\Type\Constant\ConstantStringType('Value'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RefinedTerm'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalTerm'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartIndex'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndIndex'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
            ]),
        ]);
    }
}