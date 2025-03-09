<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class AccountClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Account\AccountClient>
     */
    public function getClass(): string
    {
        return \Aws\Account\AccountClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptPrimaryEmailUpdate',
            'deleteAlternateContact',
            'disableRegion',
            'enableRegion',
            'getAlternateContact',
            'getContactInformation',
            'getPrimaryEmail',
            'getRegionOptStatus',
            'listRegions',
            'putAlternateContact',
            'putContactInformation',
            'startPrimaryEmailUpdate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptPrimaryEmailUpdate' => $this->acceptPrimaryEmailUpdate(),
            'deleteAlternateContact' => $this->deleteAlternateContact(),
            'disableRegion' => $this->disableRegion(),
            'enableRegion' => $this->enableRegion(),
            'getAlternateContact' => $this->getAlternateContact(),
            'getContactInformation' => $this->getContactInformation(),
            'getPrimaryEmail' => $this->getPrimaryEmail(),
            'getRegionOptStatus' => $this->getRegionOptStatus(),
            'listRegions' => $this->listRegions(),
            'putAlternateContact' => $this->putAlternateContact(),
            'putContactInformation' => $this->putContactInformation(),
            'startPrimaryEmailUpdate' => $this->startPrimaryEmailUpdate(),
        };
    }
    private function acceptPrimaryEmailUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
            ]),
        ]);
    }
    private function deleteAlternateContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function disableRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function enableRegion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getAlternateContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AlternateContact'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AlternateContactType'),
                    new \PHPStan\Type\Constant\ConstantStringType('EmailAddress'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('Title'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BILLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('OPERATIONS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SECURITY'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getContactInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ContactInformation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine1'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine2'),
                    new \PHPStan\Type\Constant\ConstantStringType('AddressLine3'),
                    new \PHPStan\Type\Constant\ConstantStringType('City'),
                    new \PHPStan\Type\Constant\ConstantStringType('CompanyName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CountryCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DistrictOrCounty'),
                    new \PHPStan\Type\Constant\ConstantStringType('FullName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhoneNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('PostalCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('StateOrRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('WebsiteUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
    private function getPrimaryEmail(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PrimaryEmail'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getRegionOptStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                new \PHPStan\Type\Constant\ConstantStringType('RegionOptStatus'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED_BY_DEFAULT'),
                ]),
            ]),
        ]);
    }
    private function listRegions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Regions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegionName'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionOptStatus'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED_BY_DEFAULT'),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function putAlternateContact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function putContactInformation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startPrimaryEmailUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACCEPTED'),
                ]),
            ]),
        ]);
    }
}