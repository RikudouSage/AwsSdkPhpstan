<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class LicenseManagerClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\LicenseManager\LicenseManagerClient>
     */
    public function getClass(): string
    {
        return \Aws\LicenseManager\LicenseManagerClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptGrant',
            'checkInLicense',
            'checkoutBorrowLicense',
            'checkoutLicense',
            'createGrant',
            'createGrantVersion',
            'createLicense',
            'createLicenseConfiguration',
            'createLicenseConversionTaskForResource',
            'createLicenseManagerReportGenerator',
            'createLicenseVersion',
            'createToken',
            'deleteGrant',
            'deleteLicense',
            'deleteLicenseConfiguration',
            'deleteLicenseManagerReportGenerator',
            'deleteToken',
            'extendLicenseConsumption',
            'getAccessToken',
            'getGrant',
            'getLicense',
            'getLicenseConfiguration',
            'getLicenseConversionTask',
            'getLicenseManagerReportGenerator',
            'getLicenseUsage',
            'getServiceSettings',
            'listAssociationsForLicenseConfiguration',
            'listDistributedGrants',
            'listFailuresForLicenseConfigurationOperations',
            'listLicenseConfigurations',
            'listLicenseConversionTasks',
            'listLicenseManagerReportGenerators',
            'listLicenseSpecificationsForResource',
            'listLicenseVersions',
            'listLicenses',
            'listReceivedGrants',
            'listReceivedGrantsForOrganization',
            'listReceivedLicenses',
            'listReceivedLicensesForOrganization',
            'listResourceInventory',
            'listTagsForResource',
            'listTokens',
            'listUsageForLicenseConfiguration',
            'rejectGrant',
            'tagResource',
            'untagResource',
            'updateLicenseConfiguration',
            'updateLicenseManagerReportGenerator',
            'updateLicenseSpecificationsForResource',
            'updateServiceSettings',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptGrant' => $this->acceptGrant(),
            'checkInLicense' => $this->checkInLicense(),
            'checkoutBorrowLicense' => $this->checkoutBorrowLicense(),
            'checkoutLicense' => $this->checkoutLicense(),
            'createGrant' => $this->createGrant(),
            'createGrantVersion' => $this->createGrantVersion(),
            'createLicense' => $this->createLicense(),
            'createLicenseConfiguration' => $this->createLicenseConfiguration(),
            'createLicenseConversionTaskForResource' => $this->createLicenseConversionTaskForResource(),
            'createLicenseManagerReportGenerator' => $this->createLicenseManagerReportGenerator(),
            'createLicenseVersion' => $this->createLicenseVersion(),
            'createToken' => $this->createToken(),
            'deleteGrant' => $this->deleteGrant(),
            'deleteLicense' => $this->deleteLicense(),
            'deleteLicenseConfiguration' => $this->deleteLicenseConfiguration(),
            'deleteLicenseManagerReportGenerator' => $this->deleteLicenseManagerReportGenerator(),
            'deleteToken' => $this->deleteToken(),
            'extendLicenseConsumption' => $this->extendLicenseConsumption(),
            'getAccessToken' => $this->getAccessToken(),
            'getGrant' => $this->getGrant(),
            'getLicense' => $this->getLicense(),
            'getLicenseConfiguration' => $this->getLicenseConfiguration(),
            'getLicenseConversionTask' => $this->getLicenseConversionTask(),
            'getLicenseManagerReportGenerator' => $this->getLicenseManagerReportGenerator(),
            'getLicenseUsage' => $this->getLicenseUsage(),
            'getServiceSettings' => $this->getServiceSettings(),
            'listAssociationsForLicenseConfiguration' => $this->listAssociationsForLicenseConfiguration(),
            'listDistributedGrants' => $this->listDistributedGrants(),
            'listFailuresForLicenseConfigurationOperations' => $this->listFailuresForLicenseConfigurationOperations(),
            'listLicenseConfigurations' => $this->listLicenseConfigurations(),
            'listLicenseConversionTasks' => $this->listLicenseConversionTasks(),
            'listLicenseManagerReportGenerators' => $this->listLicenseManagerReportGenerators(),
            'listLicenseSpecificationsForResource' => $this->listLicenseSpecificationsForResource(),
            'listLicenseVersions' => $this->listLicenseVersions(),
            'listLicenses' => $this->listLicenses(),
            'listReceivedGrants' => $this->listReceivedGrants(),
            'listReceivedGrantsForOrganization' => $this->listReceivedGrantsForOrganization(),
            'listReceivedLicenses' => $this->listReceivedLicenses(),
            'listReceivedLicensesForOrganization' => $this->listReceivedLicensesForOrganization(),
            'listResourceInventory' => $this->listResourceInventory(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listTokens' => $this->listTokens(),
            'listUsageForLicenseConfiguration' => $this->listUsageForLicenseConfiguration(),
            'rejectGrant' => $this->rejectGrant(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateLicenseConfiguration' => $this->updateLicenseConfiguration(),
            'updateLicenseManagerReportGenerator' => $this->updateLicenseManagerReportGenerator(),
            'updateLicenseSpecificationsForResource' => $this->updateLicenseSpecificationsForResource(),
            'updateServiceSettings' => $this->updateServiceSettings(),
        };
    }
    private function acceptGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function checkInLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function checkoutBorrowLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConsumptionToken'),
                new \PHPStan\Type\Constant\ConstantStringType('EntitlementsAllowed'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                new \PHPStan\Type\Constant\ConstantStringType('SignedToken'),
                new \PHPStan\Type\Constant\ConstantStringType('IssuedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('CheckoutMetadata'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function checkoutLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CheckoutType'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConsumptionToken'),
                new \PHPStan\Type\Constant\ConstantStringType('EntitlementsAllowed'),
                new \PHPStan\Type\Constant\ConstantStringType('SignedToken'),
                new \PHPStan\Type\Constant\ConstantStringType('NodeId'),
                new \PHPStan\Type\Constant\ConstantStringType('IssuedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROVISIONAL'),
                    new \PHPStan\Type\Constant\ConstantStringType('PERPETUAL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Count'),
                        new \PHPStan\Type\Constant\ConstantStringType('None'),
                        new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                        new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                        new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGrantVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLicenseConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLicenseConversionTaskForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConversionTaskId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLicenseManagerReportGenerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseManagerReportGeneratorArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLicenseVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
            ]),
        ]);
    }
    private function createToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TokenId'),
                new \PHPStan\Type\Constant\ConstantStringType('TokenType'),
                new \PHPStan\Type\Constant\ConstantStringType('Token'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantStringType('REFRESH_TOKEN'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('DeletionDate'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLicenseConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteLicenseManagerReportGenerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function extendLicenseConsumption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConsumptionToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Expiration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getAccessToken(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grant'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteePrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantedOperations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutBorrowLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckInLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendConsumptionLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListPurchasedLicenses'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateToken'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActivationOverrideBehavior'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED_GRANTS_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_GRANTS_PERMITTED_BY_ISSUER'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getLicense(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('License'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductSKU'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beneficiary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyFingerprint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCheckIn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RenewType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionalConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('BorrowConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowEarlyCheckIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getLicenseConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationId'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseCountingType'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseRules'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseCount'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseCountHardLimit'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenses'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenseSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('ManagedResourceSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('ProductInformationList'),
                new \PHPStan\Type\Constant\ConstantStringType('AutomatedDiscoveryInformation'),
                new \PHPStan\Type\Constant\ConstantStringType('DisassociateWhenNotFound'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('vCPU'),
                    new \PHPStan\Type\Constant\ConstantStringType('Instance'),
                    new \PHPStan\Type\Constant\ConstantStringType('Core'),
                    new \PHPStan\Type\Constant\ConstantStringType('Socket'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenses'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationCount'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterComparator'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunTime'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function getLicenseConversionTask(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConversionTaskId'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceLicenseContext'),
                new \PHPStan\Type\Constant\ConstantStringType('DestinationLicenseContext'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConversionTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UsageOperation'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UsageOperation'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function getLicenseManagerReportGenerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportGenerator'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportGeneratorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseManagerReportGeneratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunFailureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastReportGenerationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportCreatorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationSummaryReport'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationUsageReport'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('licenseConfigurationArns'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('period'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getLicenseUsage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseUsage'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EntitlementUsages'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumedValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                        ]),
                    ])),
                ]),
            ]),
        ]);
    }
    private function getServiceSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('S3BucketArn'),
                new \PHPStan\Type\Constant\ConstantStringType('SnsTopicArn'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('EnableCrossAccountsDiscovery'),
                new \PHPStan\Type\Constant\ConstantStringType('LicenseManagerResourceShareArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('EnableIntegration'),
                ], [
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listAssociationsForLicenseConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationAssociations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceOwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmiAssociationScope'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDistributedGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteePrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantedOperations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutBorrowLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckInLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendConsumptionLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListPurchasedLicenses'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateToken'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActivationOverrideBehavior'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED_GRANTS_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_GRANTS_PERMITTED_BY_ISSUER'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listFailuresForLicenseConfigurationOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseOperationFailureList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceOwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationRequestedBy'),
                    new \PHPStan\Type\Constant\ConstantStringType('MetadataList'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLicenseConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseCountingType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseRules'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseCountHardLimit'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisassociateWhenNotFound'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenses'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OwnerAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenseSummaryList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedResourceSummaryList'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductInformationList'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutomatedDiscoveryInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('vCPU'),
                        new \PHPStan\Type\Constant\ConstantStringType('Instance'),
                        new \PHPStan\Type\Constant\ConstantStringType('Core'),
                        new \PHPStan\Type\Constant\ConstantStringType('Socket'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenses'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssociationCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                            new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                            new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterList'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterValue'),
                            new \PHPStan\Type\Constant\ConstantStringType('ProductInformationFilterComparator'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('LastRunTime'),
                    ], [
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLicenseConversionTasks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConversionTasks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseConversionTaskId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceLicenseContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('DestinationLicenseContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseConversionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UsageOperation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('UsageOperation'),
                    ], [
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLicenseManagerReportGenerators(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ReportGenerators'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ReportGeneratorName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportFrequency'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseManagerReportGeneratorArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRunFailureReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastReportGenerationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReportCreatorAccount'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('S3Location'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationSummaryReport'),
                        new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationUsageReport'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('licenseConfigurationArns'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                        new \PHPStan\Type\Constant\ConstantStringType('period'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DAY'),
                            new \PHPStan\Type\Constant\ConstantStringType('WEEK'),
                            new \PHPStan\Type\Constant\ConstantStringType('MONTH'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('bucket'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyPrefix'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLicenseSpecificationsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseSpecifications'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('AmiAssociationScope'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLicenseVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Licenses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductSKU'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beneficiary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyFingerprint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCheckIn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RenewType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionalConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('BorrowConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowEarlyCheckIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLicenses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Licenses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductSKU'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beneficiary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyFingerprint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCheckIn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RenewType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionalConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('BorrowConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowEarlyCheckIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReceivedGrants(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteePrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantedOperations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutBorrowLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckInLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendConsumptionLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListPurchasedLicenses'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateToken'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActivationOverrideBehavior'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED_GRANTS_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_GRANTS_PERMITTED_BY_ISSUER'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReceivedGrantsForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Grants'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('GranteePrincipalArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('GrantedOperations'),
                    new \PHPStan\Type\Constant\ConstantStringType('Options'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckoutBorrowLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('CheckInLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExtendConsumptionLicense'),
                        new \PHPStan\Type\Constant\ConstantStringType('ListPurchasedLicenses'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreateToken'),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ActivationOverrideBehavior'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTED_GRANTS_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('ALL_GRANTS_PERMITTED_BY_ISSUER'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReceivedLicenses(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Licenses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductSKU'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beneficiary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceivedMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyFingerprint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCheckIn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RenewType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionalConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('BorrowConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowEarlyCheckIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReceivedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReceivedStatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedOperations'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckoutLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckoutBorrowLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckInLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExtendConsumptionLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('ListPurchasedLicenses'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateToken'),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listReceivedLicensesForOrganization(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Licenses'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductSKU'),
                    new \PHPStan\Type\Constant\ConstantStringType('Issuer'),
                    new \PHPStan\Type\Constant\ConstantStringType('HomeRegion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('Validity'),
                    new \PHPStan\Type\Constant\ConstantStringType('Beneficiary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entitlements'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumptionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreateTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Version'),
                    new \PHPStan\Type\Constant\ConstantStringType('ReceivedMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('SignKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('KeyFingerprint'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEACTIVATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUSPENDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Begin'),
                        new \PHPStan\Type\Constant\ConstantStringType('End'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('Overage'),
                        new \PHPStan\Type\Constant\ConstantStringType('Unit'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowCheckIn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Count'),
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Seconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Microseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Milliseconds'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits'),
                            new \PHPStan\Type\Constant\ConstantStringType('Percent'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabytes/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Bits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Kilobits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Megabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Gigabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Terabits/Second'),
                            new \PHPStan\Type\Constant\ConstantStringType('Count/Second'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RenewType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProvisionalConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('BorrowConfiguration'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('None'),
                            new \PHPStan\Type\Constant\ConstantStringType('Weekly'),
                            new \PHPStan\Type\Constant\ConstantStringType('Monthly'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('AllowEarlyCheckIn'),
                            new \PHPStan\Type\Constant\ConstantStringType('MaxTimeToLiveInMinutes'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ReceivedStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('ReceivedStatusReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedOperations'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CreateGrant'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckoutLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckoutBorrowLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('CheckInLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('ExtendConsumptionLicense'),
                            new \PHPStan\Type\Constant\ConstantStringType('ListPurchasedLicenses'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreateToken'),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceInventory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceInventoryList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlatformVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceOwningAccountId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTokens(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Tokens'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TokenId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LicenseArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpirationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('TokenProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listUsageForLicenseConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LicenseConfigurationUsageList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceOwnerId'),
                    new \PHPStan\Type\Constant\ConstantStringType('AssociationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConsumedLicenses'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_HOST'),
                        new \PHPStan\Type\Constant\ConstantStringType('EC2_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('RDS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SYSTEMS_MANAGER_MANAGED_INSTANCE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rejectGrant(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GrantArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_ACCEPT'),
                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED_WORKFLOW'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('WORKFLOW_COMPLETED'),
                ]),
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
    private function updateLicenseConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLicenseManagerReportGenerator(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateLicenseSpecificationsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateServiceSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
}