<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class GreengrassV2ClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\GreengrassV2\GreengrassV2Client>
     */
    public function getClass(): string
    {
        return \Aws\GreengrassV2\GreengrassV2Client::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateServiceRoleToAccount',
            'batchAssociateClientDeviceWithCoreDevice',
            'batchDisassociateClientDeviceFromCoreDevice',
            'cancelDeployment',
            'createComponentVersion',
            'createDeployment',
            'deleteComponent',
            'deleteCoreDevice',
            'deleteDeployment',
            'describeComponent',
            'disassociateServiceRoleFromAccount',
            'getComponent',
            'getComponentVersionArtifact',
            'getConnectivityInfo',
            'getCoreDevice',
            'getDeployment',
            'getServiceRoleForAccount',
            'listClientDevicesAssociatedWithCoreDevice',
            'listComponentVersions',
            'listComponents',
            'listCoreDevices',
            'listDeployments',
            'listEffectiveDeployments',
            'listInstalledComponents',
            'listTagsForResource',
            'resolveComponentCandidates',
            'tagResource',
            'untagResource',
            'updateConnectivityInfo',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateServiceRoleToAccount' => $this->associateServiceRoleToAccount(),
            'batchAssociateClientDeviceWithCoreDevice' => $this->batchAssociateClientDeviceWithCoreDevice(),
            'batchDisassociateClientDeviceFromCoreDevice' => $this->batchDisassociateClientDeviceFromCoreDevice(),
            'cancelDeployment' => $this->cancelDeployment(),
            'createComponentVersion' => $this->createComponentVersion(),
            'createDeployment' => $this->createDeployment(),
            'deleteComponent' => $this->deleteComponent(),
            'deleteCoreDevice' => $this->deleteCoreDevice(),
            'deleteDeployment' => $this->deleteDeployment(),
            'describeComponent' => $this->describeComponent(),
            'disassociateServiceRoleFromAccount' => $this->disassociateServiceRoleFromAccount(),
            'getComponent' => $this->getComponent(),
            'getComponentVersionArtifact' => $this->getComponentVersionArtifact(),
            'getConnectivityInfo' => $this->getConnectivityInfo(),
            'getCoreDevice' => $this->getCoreDevice(),
            'getDeployment' => $this->getDeployment(),
            'getServiceRoleForAccount' => $this->getServiceRoleForAccount(),
            'listClientDevicesAssociatedWithCoreDevice' => $this->listClientDevicesAssociatedWithCoreDevice(),
            'listComponentVersions' => $this->listComponentVersions(),
            'listComponents' => $this->listComponents(),
            'listCoreDevices' => $this->listCoreDevices(),
            'listDeployments' => $this->listDeployments(),
            'listEffectiveDeployments' => $this->listEffectiveDeployments(),
            'listInstalledComponents' => $this->listInstalledComponents(),
            'listTagsForResource' => $this->listTagsForResource(),
            'resolveComponentCandidates' => $this->resolveComponentCandidates(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateConnectivityInfo' => $this->updateConnectivityInfo(),
        };
    }
    private function associateServiceRoleToAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchAssociateClientDeviceWithCoreDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function batchDisassociateClientDeviceFromCoreDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('errorEntries'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('code'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function cancelDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createComponentVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('componentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorGuidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorGuidanceMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONTINUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('iotJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('iotJobArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteCoreDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function describeComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('platforms'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('componentState'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('errors'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorGuidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('vendorGuidanceMessage'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REQUESTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISCONTINUED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function disassociateServiceRoleFromAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('disassociatedAt'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('recipeOutputFormat'),
                new \PHPStan\Type\Constant\ConstantStringType('recipe'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('JSON'),
                    new \PHPStan\Type\Constant\ConstantStringType('YAML'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getComponentVersionArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('preSignedUrl'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getConnectivityInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('connectivityInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostAddress'),
                        new \PHPStan\Type\Constant\ConstantStringType('portNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getCoreDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('coreDeviceThingName'),
                new \PHPStan\Type\Constant\ConstantStringType('coreVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('platform'),
                new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('lastStatusUpdateTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentName'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('iotJobId'),
                new \PHPStan\Type\Constant\ConstantStringType('iotJobArn'),
                new \PHPStan\Type\Constant\ConstantStringType('components'),
                new \PHPStan\Type\Constant\ConstantStringType('deploymentPolicies'),
                new \PHPStan\Type\Constant\ConstantStringType('iotJobConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                new \PHPStan\Type\Constant\ConstantStringType('isLatestForTarget'),
                new \PHPStan\Type\Constant\ConstantStringType('parentTargetArn'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationUpdate'),
                    new \PHPStan\Type\Constant\ConstantStringType('runWith'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('merge'),
                        new \PHPStan\Type\Constant\ConstantStringType('reset'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('posixUser'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemResourceLimits'),
                        new \PHPStan\Type\Constant\ConstantStringType('windowsUser'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('memory'),
                            new \PHPStan\Type\Constant\ConstantStringType('cpus'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('failureHandlingPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentUpdatePolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('configurationValidationPolicy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                        new \PHPStan\Type\Constant\ConstantStringType('DO_NOTHING'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOTIFY_COMPONENTS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIP_NOTIFY_COMPONENTS'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutInSeconds'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('jobExecutionsRolloutConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('abortConfig'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutConfig'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('exponentialRate'),
                        new \PHPStan\Type\Constant\ConstantStringType('maximumPerMinute'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseRatePerMinute'),
                            new \PHPStan\Type\Constant\ConstantStringType('incrementFactor'),
                            new \PHPStan\Type\Constant\ConstantStringType('rateIncreaseCriteria'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfNotifiedThings'),
                                new \PHPStan\Type\Constant\ConstantStringType('numberOfSucceededThings'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('criteriaList'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('failureType'),
                                new \PHPStan\Type\Constant\ConstantStringType('action'),
                                new \PHPStan\Type\Constant\ConstantStringType('thresholdPercentage'),
                                new \PHPStan\Type\Constant\ConstantStringType('minNumberOfExecutedThings'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                                    new \PHPStan\Type\Constant\ConstantStringType('ALL'),
                                ]),
                                new \PHPStan\Type\Constant\ConstantStringType('CANCEL'),
                                new \PHPStan\Type\FloatType(),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                        ])),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('inProgressTimeoutInMinutes'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getServiceRoleForAccount(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associatedAt'),
                new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listClientDevicesAssociatedWithCoreDevice(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('associatedClientDevices'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('associationTimestamp'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComponentVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('componentVersions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
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
    private function listComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('components'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('latestVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                            new \PHPStan\Type\Constant\ConstantStringType('platforms'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                                    new \PHPStan\Type\Constant\ConstantStringType('attributes'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                ]),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listCoreDevices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('coreDevices'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('coreDeviceThingName'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatusUpdateTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('architecture'),
                        new \PHPStan\Type\Constant\ConstantStringType('runtime'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('HEALTHY'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNHEALTHY'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deployments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('isLatestForTarget'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentTargetArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INACTIVE'),
                        ]),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEffectiveDeployments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('effectiveDeployments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotJobId'),
                        new \PHPStan\Type\Constant\ConstantStringType('iotJobArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('coreDeviceExecutionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        new \PHPStan\Type\Constant\ConstantStringType('creationTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('modifiedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('statusDetails'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELED'),
                            new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('errorStack'),
                            new \PHPStan\Type\Constant\ConstantStringType('errorTypes'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\StringType(),
                            ])),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInstalledComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('installedComponents'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleState'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleStateDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('isRoot'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastStatusChangeTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastReportedTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastInstallationSource'),
                        new \PHPStan\Type\Constant\ConstantStringType('lifecycleStatusCodes'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NEW'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTALLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERRORED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BROKEN'),
                            new \PHPStan\Type\Constant\ConstantStringType('FINISHED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                        ])),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
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
    private function resolveComponentCandidates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resolvedComponentVersions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                        new \PHPStan\Type\Constant\ConstantStringType('componentVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('recipe'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorGuidance'),
                        new \PHPStan\Type\Constant\ConstantStringType('message'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ResourceType(),
                            new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISCONTINUED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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
    private function updateConnectivityInfo(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('version'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}