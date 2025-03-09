<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class TnbClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Tnb\TnbClient>
     */
    public function getClass(): string
    {
        return \Aws\Tnb\TnbClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelSolNetworkOperation',
            'createSolFunctionPackage',
            'createSolNetworkInstance',
            'createSolNetworkPackage',
            'deleteSolFunctionPackage',
            'deleteSolNetworkInstance',
            'deleteSolNetworkPackage',
            'getSolFunctionInstance',
            'getSolFunctionPackage',
            'getSolFunctionPackageContent',
            'getSolFunctionPackageDescriptor',
            'getSolNetworkInstance',
            'getSolNetworkOperation',
            'getSolNetworkPackage',
            'getSolNetworkPackageContent',
            'getSolNetworkPackageDescriptor',
            'instantiateSolNetworkInstance',
            'listSolFunctionInstances',
            'listSolFunctionPackages',
            'listSolNetworkInstances',
            'listSolNetworkOperations',
            'listSolNetworkPackages',
            'listTagsForResource',
            'putSolFunctionPackageContent',
            'putSolNetworkPackageContent',
            'tagResource',
            'terminateSolNetworkInstance',
            'untagResource',
            'updateSolFunctionPackage',
            'updateSolNetworkInstance',
            'updateSolNetworkPackage',
            'validateSolFunctionPackageContent',
            'validateSolNetworkPackageContent',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelSolNetworkOperation' => $this->cancelSolNetworkOperation(),
            'createSolFunctionPackage' => $this->createSolFunctionPackage(),
            'createSolNetworkInstance' => $this->createSolNetworkInstance(),
            'createSolNetworkPackage' => $this->createSolNetworkPackage(),
            'deleteSolFunctionPackage' => $this->deleteSolFunctionPackage(),
            'deleteSolNetworkInstance' => $this->deleteSolNetworkInstance(),
            'deleteSolNetworkPackage' => $this->deleteSolNetworkPackage(),
            'getSolFunctionInstance' => $this->getSolFunctionInstance(),
            'getSolFunctionPackage' => $this->getSolFunctionPackage(),
            'getSolFunctionPackageContent' => $this->getSolFunctionPackageContent(),
            'getSolFunctionPackageDescriptor' => $this->getSolFunctionPackageDescriptor(),
            'getSolNetworkInstance' => $this->getSolNetworkInstance(),
            'getSolNetworkOperation' => $this->getSolNetworkOperation(),
            'getSolNetworkPackage' => $this->getSolNetworkPackage(),
            'getSolNetworkPackageContent' => $this->getSolNetworkPackageContent(),
            'getSolNetworkPackageDescriptor' => $this->getSolNetworkPackageDescriptor(),
            'instantiateSolNetworkInstance' => $this->instantiateSolNetworkInstance(),
            'listSolFunctionInstances' => $this->listSolFunctionInstances(),
            'listSolFunctionPackages' => $this->listSolFunctionPackages(),
            'listSolNetworkInstances' => $this->listSolNetworkInstances(),
            'listSolNetworkOperations' => $this->listSolNetworkOperations(),
            'listSolNetworkPackages' => $this->listSolNetworkPackages(),
            'listTagsForResource' => $this->listTagsForResource(),
            'putSolFunctionPackageContent' => $this->putSolFunctionPackageContent(),
            'putSolNetworkPackageContent' => $this->putSolNetworkPackageContent(),
            'tagResource' => $this->tagResource(),
            'terminateSolNetworkInstance' => $this->terminateSolNetworkInstance(),
            'untagResource' => $this->untagResource(),
            'updateSolFunctionPackage' => $this->updateSolFunctionPackage(),
            'updateSolNetworkInstance' => $this->updateSolNetworkInstance(),
            'updateSolNetworkPackage' => $this->updateSolNetworkPackage(),
            'validateSolFunctionPackageContent' => $this->validateSolFunctionPackageContent(),
            'validateSolNetworkPackageContent' => $this->validateSolNetworkPackageContent(),
        };
    }
    private function cancelSolNetworkOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function createSolFunctionPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('onboardingState'),
                new \PHPStan\Type\Constant\ConstantStringType('operationalState'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('usageState'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IN_USE'),
                ]),
            ]),
        ]);
    }
    private function createSolNetworkInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('nsInstanceName'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdInfoId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function createSolNetworkPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdOnboardingState'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdOperationalState'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdUsageState'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IN_USE'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function deleteSolFunctionPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSolNetworkInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteSolNetworkPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getSolFunctionInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('instantiatedVnfInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('instantiationState'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nsInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfPkgId'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProductName'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProvider'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdId'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vnfState'),
                    new \PHPStan\Type\Constant\ConstantStringType('vnfcResourceInfo'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('cluster'),
                                new \PHPStan\Type\Constant\ConstantStringType('helmChart'),
                                new \PHPStan\Type\Constant\ConstantStringType('nodeGroup'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ])),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_INSTANTIATED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSolFunctionPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('onboardingState'),
                new \PHPStan\Type\Constant\ConstantStringType('operationalState'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('usageState'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProductName'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProvider'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdId'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('vnfd'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IN_USE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSolFunctionPackageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('packageContent'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('application/zip'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getSolFunctionPackageDescriptor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfd'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('text/plain'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getSolNetworkInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lcmOpInfo'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nsInstanceDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('nsInstanceName'),
                new \PHPStan\Type\Constant\ConstantStringType('nsState'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdId'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdInfoId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nsLcmOpOccId'),
                ], [
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_INSTANTIATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('INTENT_TO_UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_IN_PROGRESS'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function getSolNetworkOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('error'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('lcmOperationType'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nsInstanceId'),
                new \PHPStan\Type\Constant\ConstantStringType('operationState'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('tasks'),
                new \PHPStan\Type\Constant\ConstantStringType('updateType'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('detail'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                    new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('instantiateMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('modifyVnfInfoMetadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('updateNsMetadata'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalParamsForNs'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdInfoId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vnfConfigurableProperties'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfInstanceId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('additionalParamsForNs'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdInfoId'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([], []),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('taskContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskEndTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskErrorDetails'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskName'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStartTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('taskStatus'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('cause'),
                            new \PHPStan\Type\Constant\ConstantStringType('details'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('MODIFY_VNF_INFORMATION'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NS'),
                ]),
            ]),
        ]);
    }
    private function getSolNetworkPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdId'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdName'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdOnboardingState'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdOperationalState'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdUsageState'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfPkgIds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                    new \PHPStan\Type\Constant\ConstantStringType('nsd'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_IN_USE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function getSolNetworkPackageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdContent'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('application/zip'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function getSolNetworkPackageDescriptor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('contentType'),
                new \PHPStan\Type\Constant\ConstantStringType('nsd'),
            ], [
                new \PHPStan\Type\Constant\ConstantStringType('text/plain'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ResourceType(),
                    new \PHPStan\Type\ObjectType('Psr\Http\Message\StreamInterface'),
                ]),
            ]),
        ]);
    }
    private function instantiateSolNetworkInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nsLcmOpOccId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function listSolFunctionInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('functionInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('instantiatedVnfInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('instantiationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfPkgId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfPkgName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('vnfState'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('STARTED'),
                                new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_INSTANTIATED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSolFunctionPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('functionPackages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('onboardingState'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationalState'),
                        new \PHPStan\Type\Constant\ConstantStringType('usageState'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfProductName'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfdId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfdVersion'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IN_USE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSolNetworkInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsInstanceDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsInstanceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsState'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdId'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdInfoId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_INSTANTIATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IMPAIRED'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTENT_TO_UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE_IN_PROGRESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSolNetworkOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkOperations'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('error'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('lcmOperationType'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('operationState'),
                        new \PHPStan\Type\Constant\ConstantStringType('updateType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('detail'),
                            new \PHPStan\Type\Constant\ConstantStringType('title'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('INSTANTIATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERMINATE'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                            new \PHPStan\Type\Constant\ConstantStringType('nsdInfoId'),
                            new \PHPStan\Type\Constant\ConstantStringType('vnfInstanceId'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PROCESSING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFY_VNF_INFORMATION'),
                            new \PHPStan\Type\Constant\ConstantStringType('UPDATE_NS'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listSolNetworkPackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('networkPackages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdDesigner'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdId'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdInvariantId'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdName'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdOnboardingState'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdOperationalState'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdUsageState'),
                        new \PHPStan\Type\Constant\ConstantStringType('nsdVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('vnfPkgIds'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastModified'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ONBOARDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_USE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_IN_USE'),
                        ]),
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
    private function putSolFunctionPackageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProductName'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProvider'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdId'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vnfd'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putSolNetworkPackageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdId'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdName'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfPkgIds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nsd'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
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
    private function terminateSolNetworkInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nsLcmOpOccId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateSolFunctionPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('operationalState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function updateSolNetworkInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nsLcmOpOccId'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
    private function updateSolNetworkPackage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nsdOperationalState'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function validateSolFunctionPackageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProductName'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfProvider'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdId'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfdVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('vnfd'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function validateSolNetworkPackageContent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('arn'),
                new \PHPStan\Type\Constant\ConstantStringType('id'),
                new \PHPStan\Type\Constant\ConstantStringType('metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdId'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdName'),
                new \PHPStan\Type\Constant\ConstantStringType('nsdVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('vnfPkgIds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('nsd'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('overrides'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ])),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
}