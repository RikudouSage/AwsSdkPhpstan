<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ServiceCatalogClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\ServiceCatalog\ServiceCatalogClient>
     */
    public function getClass(): string
    {
        return \Aws\ServiceCatalog\ServiceCatalogClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptPortfolioShare',
            'associateBudgetWithResource',
            'associatePrincipalWithPortfolio',
            'associateProductWithPortfolio',
            'associateServiceActionWithProvisioningArtifact',
            'associateTagOptionWithResource',
            'batchAssociateServiceActionWithProvisioningArtifact',
            'batchDisassociateServiceActionFromProvisioningArtifact',
            'copyProduct',
            'createConstraint',
            'createPortfolio',
            'createPortfolioShare',
            'createProduct',
            'createProvisionedProductPlan',
            'createProvisioningArtifact',
            'createServiceAction',
            'createTagOption',
            'deleteConstraint',
            'deletePortfolio',
            'deletePortfolioShare',
            'deleteProduct',
            'deleteProvisionedProductPlan',
            'deleteProvisioningArtifact',
            'deleteServiceAction',
            'deleteTagOption',
            'describeConstraint',
            'describeCopyProductStatus',
            'describePortfolio',
            'describePortfolioShareStatus',
            'describePortfolioShares',
            'describeProduct',
            'describeProductAsAdmin',
            'describeProductView',
            'describeProvisionedProduct',
            'describeProvisionedProductPlan',
            'describeProvisioningArtifact',
            'describeProvisioningParameters',
            'describeRecord',
            'describeServiceAction',
            'describeServiceActionExecutionParameters',
            'describeTagOption',
            'disableAWSOrganizationsAccess',
            'disassociateBudgetFromResource',
            'disassociatePrincipalFromPortfolio',
            'disassociateProductFromPortfolio',
            'disassociateServiceActionFromProvisioningArtifact',
            'disassociateTagOptionFromResource',
            'enableAWSOrganizationsAccess',
            'executeProvisionedProductPlan',
            'executeProvisionedProductServiceAction',
            'getAWSOrganizationsAccessStatus',
            'getProvisionedProductOutputs',
            'importAsProvisionedProduct',
            'listAcceptedPortfolioShares',
            'listBudgetsForResource',
            'listConstraintsForPortfolio',
            'listLaunchPaths',
            'listOrganizationPortfolioAccess',
            'listPortfolioAccess',
            'listPortfolios',
            'listPortfoliosForProduct',
            'listPrincipalsForPortfolio',
            'listProvisionedProductPlans',
            'listProvisioningArtifacts',
            'listProvisioningArtifactsForServiceAction',
            'listRecordHistory',
            'listResourcesForTagOption',
            'listServiceActions',
            'listServiceActionsForProvisioningArtifact',
            'listStackInstancesForProvisionedProduct',
            'listTagOptions',
            'notifyProvisionProductEngineWorkflowResult',
            'notifyTerminateProvisionedProductEngineWorkflowResult',
            'notifyUpdateProvisionedProductEngineWorkflowResult',
            'provisionProduct',
            'rejectPortfolioShare',
            'scanProvisionedProducts',
            'searchProducts',
            'searchProductsAsAdmin',
            'searchProvisionedProducts',
            'terminateProvisionedProduct',
            'updateConstraint',
            'updatePortfolio',
            'updatePortfolioShare',
            'updateProduct',
            'updateProvisionedProduct',
            'updateProvisionedProductProperties',
            'updateProvisioningArtifact',
            'updateServiceAction',
            'updateTagOption',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptPortfolioShare' => $this->acceptPortfolioShare(),
            'associateBudgetWithResource' => $this->associateBudgetWithResource(),
            'associatePrincipalWithPortfolio' => $this->associatePrincipalWithPortfolio(),
            'associateProductWithPortfolio' => $this->associateProductWithPortfolio(),
            'associateServiceActionWithProvisioningArtifact' => $this->associateServiceActionWithProvisioningArtifact(),
            'associateTagOptionWithResource' => $this->associateTagOptionWithResource(),
            'batchAssociateServiceActionWithProvisioningArtifact' => $this->batchAssociateServiceActionWithProvisioningArtifact(),
            'batchDisassociateServiceActionFromProvisioningArtifact' => $this->batchDisassociateServiceActionFromProvisioningArtifact(),
            'copyProduct' => $this->copyProduct(),
            'createConstraint' => $this->createConstraint(),
            'createPortfolio' => $this->createPortfolio(),
            'createPortfolioShare' => $this->createPortfolioShare(),
            'createProduct' => $this->createProduct(),
            'createProvisionedProductPlan' => $this->createProvisionedProductPlan(),
            'createProvisioningArtifact' => $this->createProvisioningArtifact(),
            'createServiceAction' => $this->createServiceAction(),
            'createTagOption' => $this->createTagOption(),
            'deleteConstraint' => $this->deleteConstraint(),
            'deletePortfolio' => $this->deletePortfolio(),
            'deletePortfolioShare' => $this->deletePortfolioShare(),
            'deleteProduct' => $this->deleteProduct(),
            'deleteProvisionedProductPlan' => $this->deleteProvisionedProductPlan(),
            'deleteProvisioningArtifact' => $this->deleteProvisioningArtifact(),
            'deleteServiceAction' => $this->deleteServiceAction(),
            'deleteTagOption' => $this->deleteTagOption(),
            'describeConstraint' => $this->describeConstraint(),
            'describeCopyProductStatus' => $this->describeCopyProductStatus(),
            'describePortfolio' => $this->describePortfolio(),
            'describePortfolioShareStatus' => $this->describePortfolioShareStatus(),
            'describePortfolioShares' => $this->describePortfolioShares(),
            'describeProduct' => $this->describeProduct(),
            'describeProductAsAdmin' => $this->describeProductAsAdmin(),
            'describeProductView' => $this->describeProductView(),
            'describeProvisionedProduct' => $this->describeProvisionedProduct(),
            'describeProvisionedProductPlan' => $this->describeProvisionedProductPlan(),
            'describeProvisioningArtifact' => $this->describeProvisioningArtifact(),
            'describeProvisioningParameters' => $this->describeProvisioningParameters(),
            'describeRecord' => $this->describeRecord(),
            'describeServiceAction' => $this->describeServiceAction(),
            'describeServiceActionExecutionParameters' => $this->describeServiceActionExecutionParameters(),
            'describeTagOption' => $this->describeTagOption(),
            'disableAWSOrganizationsAccess' => $this->disableAWSOrganizationsAccess(),
            'disassociateBudgetFromResource' => $this->disassociateBudgetFromResource(),
            'disassociatePrincipalFromPortfolio' => $this->disassociatePrincipalFromPortfolio(),
            'disassociateProductFromPortfolio' => $this->disassociateProductFromPortfolio(),
            'disassociateServiceActionFromProvisioningArtifact' => $this->disassociateServiceActionFromProvisioningArtifact(),
            'disassociateTagOptionFromResource' => $this->disassociateTagOptionFromResource(),
            'enableAWSOrganizationsAccess' => $this->enableAWSOrganizationsAccess(),
            'executeProvisionedProductPlan' => $this->executeProvisionedProductPlan(),
            'executeProvisionedProductServiceAction' => $this->executeProvisionedProductServiceAction(),
            'getAWSOrganizationsAccessStatus' => $this->getAWSOrganizationsAccessStatus(),
            'getProvisionedProductOutputs' => $this->getProvisionedProductOutputs(),
            'importAsProvisionedProduct' => $this->importAsProvisionedProduct(),
            'listAcceptedPortfolioShares' => $this->listAcceptedPortfolioShares(),
            'listBudgetsForResource' => $this->listBudgetsForResource(),
            'listConstraintsForPortfolio' => $this->listConstraintsForPortfolio(),
            'listLaunchPaths' => $this->listLaunchPaths(),
            'listOrganizationPortfolioAccess' => $this->listOrganizationPortfolioAccess(),
            'listPortfolioAccess' => $this->listPortfolioAccess(),
            'listPortfolios' => $this->listPortfolios(),
            'listPortfoliosForProduct' => $this->listPortfoliosForProduct(),
            'listPrincipalsForPortfolio' => $this->listPrincipalsForPortfolio(),
            'listProvisionedProductPlans' => $this->listProvisionedProductPlans(),
            'listProvisioningArtifacts' => $this->listProvisioningArtifacts(),
            'listProvisioningArtifactsForServiceAction' => $this->listProvisioningArtifactsForServiceAction(),
            'listRecordHistory' => $this->listRecordHistory(),
            'listResourcesForTagOption' => $this->listResourcesForTagOption(),
            'listServiceActions' => $this->listServiceActions(),
            'listServiceActionsForProvisioningArtifact' => $this->listServiceActionsForProvisioningArtifact(),
            'listStackInstancesForProvisionedProduct' => $this->listStackInstancesForProvisionedProduct(),
            'listTagOptions' => $this->listTagOptions(),
            'notifyProvisionProductEngineWorkflowResult' => $this->notifyProvisionProductEngineWorkflowResult(),
            'notifyTerminateProvisionedProductEngineWorkflowResult' => $this->notifyTerminateProvisionedProductEngineWorkflowResult(),
            'notifyUpdateProvisionedProductEngineWorkflowResult' => $this->notifyUpdateProvisionedProductEngineWorkflowResult(),
            'provisionProduct' => $this->provisionProduct(),
            'rejectPortfolioShare' => $this->rejectPortfolioShare(),
            'scanProvisionedProducts' => $this->scanProvisionedProducts(),
            'searchProducts' => $this->searchProducts(),
            'searchProductsAsAdmin' => $this->searchProductsAsAdmin(),
            'searchProvisionedProducts' => $this->searchProvisionedProducts(),
            'terminateProvisionedProduct' => $this->terminateProvisionedProduct(),
            'updateConstraint' => $this->updateConstraint(),
            'updatePortfolio' => $this->updatePortfolio(),
            'updatePortfolioShare' => $this->updatePortfolioShare(),
            'updateProduct' => $this->updateProduct(),
            'updateProvisionedProduct' => $this->updateProvisionedProduct(),
            'updateProvisionedProductProperties' => $this->updateProvisionedProductProperties(),
            'updateProvisioningArtifact' => $this->updateProvisioningArtifact(),
            'updateServiceAction' => $this->updateServiceAction(),
            'updateTagOption' => $this->updateTagOption(),
        };
    }
    private function acceptPortfolioShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateBudgetWithResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associatePrincipalWithPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateProductWithPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateServiceActionWithProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function associateTagOptionWithResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function batchAssociateServiceActionWithProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedServiceActionAssociations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PARAMETER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function batchDisassociateServiceActionFromProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('FailedServiceActionAssociations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceActionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DUPLICATE_RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('INTERNAL_FAILURE'),
                        new \PHPStan\Type\Constant\ConstantStringType('LIMIT_EXCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE_NOT_FOUND'),
                        new \PHPStan\Type\Constant\ConstantStringType('THROTTLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('INVALID_PARAMETER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function copyProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyProductToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createConstraint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConstraintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortfolioId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function createPortfolioShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioShareToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConnection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSync'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('CODESTAR'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStar'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatusMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncProvisioningArtifactId'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_CAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function createProvisionedProductPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PlanName'),
                new \PHPStan\Type\Constant\ConstantStringType('PlanId'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionProductId'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Info'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_CAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function createServiceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceActionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceActionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefinitionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function createTagOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagOptionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteConstraint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deletePortfolioShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioShareToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProvisionedProductPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteServiceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteTagOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeConstraint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConstraintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortfolioId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function describeCopyProductStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('CopyProductStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetProductId'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusDetail'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describePortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TagOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Budgets'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describePortfolioShareStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioShareToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioId'),
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationNodeValue'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ShareDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('SuccessfulShares'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareErrors'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('Message'),
                        new \PHPStan\Type\Constant\ConstantStringType('Error'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                ]),
            ]),
        ]);
    }
    private function describePortfolioShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioShareDetails'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Accepted'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShareTagOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('SharePrincipals'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION_MEMBER_ACCOUNT'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function describeProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifacts'),
                new \PHPStan\Type\Constant\ConstantStringType('Budgets'),
                new \PHPStan\Type\Constant\ConstantStringType('LaunchPaths'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeProductAsAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('TagOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('Budgets'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConnection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSync'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('CODESTAR'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStar'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatusMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncProvisioningArtifactId'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactMetadata'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeProductView(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifacts'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeProvisionedProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('CloudWatchDashboards'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdempotencyToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastProvisioningRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulProvisioningRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TAINTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAN_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeProvisionedProductPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductPlanDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceChanges'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlanType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationArns'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningParameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                ], [
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsePreviousValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Replacement'),
                    new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                    new \PHPStan\Type\Constant\ConstantStringType('Details'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFY'),
                        new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('TRUE'),
                        new \PHPStan\Type\Constant\ConstantStringType('FALSE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONDITIONAL'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PROPERTIES'),
                        new \PHPStan\Type\Constant\ConstantStringType('METADATA'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATIONPOLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATEPOLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETIONPOLICY'),
                        new \PHPStan\Type\Constant\ConstantStringType('TAGS'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Target'),
                        new \PHPStan\Type\Constant\ConstantStringType('Evaluation'),
                        new \PHPStan\Type\Constant\ConstantStringType('CausingEntity'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                            new \PHPStan\Type\Constant\ConstantStringType('Name'),
                            new \PHPStan\Type\Constant\ConstantStringType('RequiresRecreation'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('PROPERTIES'),
                                new \PHPStan\Type\Constant\ConstantStringType('METADATA'),
                                new \PHPStan\Type\Constant\ConstantStringType('CREATIONPOLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('UPDATEPOLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('DELETIONPOLICY'),
                                new \PHPStan\Type\Constant\ConstantStringType('TAGS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('NEVER'),
                                new \PHPStan\Type\Constant\ConstantStringType('CONDITIONALLY'),
                                new \PHPStan\Type\Constant\ConstantStringType('ALWAYS'),
                            ]),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STATIC'),
                            new \PHPStan\Type\Constant\ConstantStringType('DYNAMIC'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ])),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Info'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactParameters'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_CAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsNoEcho'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterConstraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstraintDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeProvisioningParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('UsageInstructions'),
                new \PHPStan\Type\Constant\ConstantStringType('TagOptions'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactPreferences'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactOutputs'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactOutputKeys'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsNoEcho'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterConstraints'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedValues'),
                        new \PHPStan\Type\Constant\ConstantStringType('AllowedPattern'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConstraintDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinLength'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('MinValue'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Values'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetAccounts'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetRegions'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function describeRecord(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('RecordOutputs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutputKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeServiceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceActionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceActionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefinitionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeServiceActionExecutionParameters(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceActionParameters'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValues'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
            ]),
        ]);
    }
    private function describeTagOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagOptionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function disableAWSOrganizationsAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateBudgetFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociatePrincipalFromPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateProductFromPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateServiceActionFromProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function disassociateTagOptionFromResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function enableAWSOrganizationsAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function executeProvisionedProductPlan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function executeProvisionedProductServiceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getAWSOrganizationsAccessStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccessStatus'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNDER_CHANGE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                ]),
            ]),
        ]);
    }
    private function getProvisionedProductOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OutputKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('OutputValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importAsProvisionedProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function listAcceptedPortfolioShares(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listBudgetsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Budgets'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('BudgetName'),
                ], [
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listConstraintsForPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConstraintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortfolioId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLaunchPaths(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('LaunchPathSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ConstraintSummaries'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listOrganizationPortfolioAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OrganizationNodes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('ORGANIZATIONAL_UNIT'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACCOUNT'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPortfolioAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountIds'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPortfolios(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPortfoliosForProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listPrincipalsForPortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Principals'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('PrincipalType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('IAM_PATTERN'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisionedProductPlans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductPlans'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('PlanName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PlanType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisioningArtifacts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_CAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listProvisioningArtifactsForServiceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactViews'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifact'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                        new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRecordHistory(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourcesForTagOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('PageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceActionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefinitionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listServiceActionsForProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceActionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefinitionType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackInstancesForProvisionedProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackInstances'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Account'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackInstanceStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INOPERABLE'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTagOptions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagOptionDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('PageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function notifyProvisionProductEngineWorkflowResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function notifyTerminateProvisionedProductEngineWorkflowResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function notifyUpdateProvisionedProductEngineWorkflowResult(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function provisionProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function rejectPortfolioShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function scanProvisionedProducts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProducts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdempotencyToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastProvisioningRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulProvisioningRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TAINTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAN_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchProducts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewAggregations'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                    new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('ApproximateCount'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ]))),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchProductsAsAdmin(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewDetails'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConnection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSync'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('CODESTAR'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStar'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatusMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncProvisioningArtifactId'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchProvisionedProducts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProducts'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalResultsCount'),
                new \PHPStan\Type\Constant\ConstantStringType('NextPageToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('IdempotencyToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastProvisioningRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulProvisioningRecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactName'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('UserArnSession'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDER_CHANGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TAINTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('PLAN_IN_PROGRESS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function terminateProvisionedProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateConstraint(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('ConstraintParameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ConstraintId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PortfolioId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updatePortfolio(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('ARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisplayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProviderName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
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
    private function updatePortfolioShare(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PortfolioShareToken'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_STARTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED_WITH_ERRORS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ERROR'),
                ]),
            ]),
        ]);
    }
    private function updateProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProductViewDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ProductViewSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceConnection'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('ShortDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Distributor'),
                        new \PHPStan\Type\Constant\ConstantStringType('HasDefaultPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportEmail'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportDescription'),
                        new \PHPStan\Type\Constant\ConstantStringType('SupportUrl'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConnectionParameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastSync'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('CODESTAR'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('CodeStar'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('ConnectionArn'),
                                new \PHPStan\Type\Constant\ConstantStringType('Repository'),
                                new \PHPStan\Type\Constant\ConstantStringType('Branch'),
                                new \PHPStan\Type\Constant\ConstantStringType('ArtifactPath'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatus'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSyncStatusMessage'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncTime'),
                            new \PHPStan\Type\Constant\ConstantStringType('LastSuccessfulSyncProvisioningArtifactId'),
                        ], [
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ObjectType('DateTimeInterface'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
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
    private function updateProvisionedProduct(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RecordDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductType'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProductId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PathId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordErrors'),
                    new \PHPStan\Type\Constant\ConstantStringType('RecordTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('LaunchRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Code'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateProvisionedProductProperties(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductId'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisionedProductProperties'),
                new \PHPStan\Type\Constant\ConstantStringType('RecordId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('OWNER'),
                    new \PHPStan\Type\Constant\ConstantStringType('LAUNCH_ROLE'),
                ]), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS_IN_ERROR'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateProvisioningArtifact(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningArtifactDetail'),
                new \PHPStan\Type\Constant\ConstantStringType('Info'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Guidance'),
                    new \PHPStan\Type\Constant\ConstantStringType('SourceRevision'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD_FORMATION_TEMPLATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('MARKETPLACE_CAR'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_OPEN_SOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM_CLOUD'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXTERNAL'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEFAULT'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
            ]),
        ]);
    }
    private function updateServiceAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ServiceActionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ServiceActionSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('Definition'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Id'),
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('DefinitionType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('SSM_AUTOMATION'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Name'),
                        new \PHPStan\Type\Constant\ConstantStringType('Version'),
                        new \PHPStan\Type\Constant\ConstantStringType('AssumeRole'),
                        new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    ]), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function updateTagOption(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TagOptionDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    new \PHPStan\Type\Constant\ConstantStringType('Id'),
                    new \PHPStan\Type\Constant\ConstantStringType('Owner'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
}