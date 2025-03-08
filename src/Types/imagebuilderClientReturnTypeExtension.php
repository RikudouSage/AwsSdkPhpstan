<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class imagebuilderClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\imagebuilder\imagebuilderClient>
     */
    public function getClass(): string
    {
        return \Aws\imagebuilder\imagebuilderClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'cancelImageCreation',
            'cancelLifecycleExecution',
            'createComponent',
            'createContainerRecipe',
            'createDistributionConfiguration',
            'createImage',
            'createImagePipeline',
            'createImageRecipe',
            'createInfrastructureConfiguration',
            'createLifecyclePolicy',
            'createWorkflow',
            'deleteComponent',
            'deleteContainerRecipe',
            'deleteDistributionConfiguration',
            'deleteImage',
            'deleteImagePipeline',
            'deleteImageRecipe',
            'deleteInfrastructureConfiguration',
            'deleteLifecyclePolicy',
            'deleteWorkflow',
            'getComponent',
            'getComponentPolicy',
            'getContainerRecipe',
            'getContainerRecipePolicy',
            'getDistributionConfiguration',
            'getImage',
            'getImagePipeline',
            'getImagePolicy',
            'getImageRecipe',
            'getImageRecipePolicy',
            'getInfrastructureConfiguration',
            'getLifecycleExecution',
            'getLifecyclePolicy',
            'getMarketplaceResource',
            'getWorkflow',
            'getWorkflowExecution',
            'getWorkflowStepExecution',
            'importComponent',
            'importDiskImage',
            'importVmImage',
            'listComponentBuildVersions',
            'listComponents',
            'listContainerRecipes',
            'listDistributionConfigurations',
            'listImageBuildVersions',
            'listImagePackages',
            'listImagePipelineImages',
            'listImagePipelines',
            'listImageRecipes',
            'listImageScanFindingAggregations',
            'listImageScanFindings',
            'listImages',
            'listInfrastructureConfigurations',
            'listLifecycleExecutionResources',
            'listLifecycleExecutions',
            'listLifecyclePolicies',
            'listTagsForResource',
            'listWaitingWorkflowSteps',
            'listWorkflowBuildVersions',
            'listWorkflowExecutions',
            'listWorkflowStepExecutions',
            'listWorkflows',
            'putComponentPolicy',
            'putContainerRecipePolicy',
            'putImagePolicy',
            'putImageRecipePolicy',
            'sendWorkflowStepAction',
            'startImagePipelineExecution',
            'startResourceStateUpdate',
            'tagResource',
            'untagResource',
            'updateDistributionConfiguration',
            'updateImagePipeline',
            'updateInfrastructureConfiguration',
            'updateLifecyclePolicy',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'cancelImageCreation' => $this->cancelImageCreation(),
            'cancelLifecycleExecution' => $this->cancelLifecycleExecution(),
            'createComponent' => $this->createComponent(),
            'createContainerRecipe' => $this->createContainerRecipe(),
            'createDistributionConfiguration' => $this->createDistributionConfiguration(),
            'createImage' => $this->createImage(),
            'createImagePipeline' => $this->createImagePipeline(),
            'createImageRecipe' => $this->createImageRecipe(),
            'createInfrastructureConfiguration' => $this->createInfrastructureConfiguration(),
            'createLifecyclePolicy' => $this->createLifecyclePolicy(),
            'createWorkflow' => $this->createWorkflow(),
            'deleteComponent' => $this->deleteComponent(),
            'deleteContainerRecipe' => $this->deleteContainerRecipe(),
            'deleteDistributionConfiguration' => $this->deleteDistributionConfiguration(),
            'deleteImage' => $this->deleteImage(),
            'deleteImagePipeline' => $this->deleteImagePipeline(),
            'deleteImageRecipe' => $this->deleteImageRecipe(),
            'deleteInfrastructureConfiguration' => $this->deleteInfrastructureConfiguration(),
            'deleteLifecyclePolicy' => $this->deleteLifecyclePolicy(),
            'deleteWorkflow' => $this->deleteWorkflow(),
            'getComponent' => $this->getComponent(),
            'getComponentPolicy' => $this->getComponentPolicy(),
            'getContainerRecipe' => $this->getContainerRecipe(),
            'getContainerRecipePolicy' => $this->getContainerRecipePolicy(),
            'getDistributionConfiguration' => $this->getDistributionConfiguration(),
            'getImage' => $this->getImage(),
            'getImagePipeline' => $this->getImagePipeline(),
            'getImagePolicy' => $this->getImagePolicy(),
            'getImageRecipe' => $this->getImageRecipe(),
            'getImageRecipePolicy' => $this->getImageRecipePolicy(),
            'getInfrastructureConfiguration' => $this->getInfrastructureConfiguration(),
            'getLifecycleExecution' => $this->getLifecycleExecution(),
            'getLifecyclePolicy' => $this->getLifecyclePolicy(),
            'getMarketplaceResource' => $this->getMarketplaceResource(),
            'getWorkflow' => $this->getWorkflow(),
            'getWorkflowExecution' => $this->getWorkflowExecution(),
            'getWorkflowStepExecution' => $this->getWorkflowStepExecution(),
            'importComponent' => $this->importComponent(),
            'importDiskImage' => $this->importDiskImage(),
            'importVmImage' => $this->importVmImage(),
            'listComponentBuildVersions' => $this->listComponentBuildVersions(),
            'listComponents' => $this->listComponents(),
            'listContainerRecipes' => $this->listContainerRecipes(),
            'listDistributionConfigurations' => $this->listDistributionConfigurations(),
            'listImageBuildVersions' => $this->listImageBuildVersions(),
            'listImagePackages' => $this->listImagePackages(),
            'listImagePipelineImages' => $this->listImagePipelineImages(),
            'listImagePipelines' => $this->listImagePipelines(),
            'listImageRecipes' => $this->listImageRecipes(),
            'listImageScanFindingAggregations' => $this->listImageScanFindingAggregations(),
            'listImageScanFindings' => $this->listImageScanFindings(),
            'listImages' => $this->listImages(),
            'listInfrastructureConfigurations' => $this->listInfrastructureConfigurations(),
            'listLifecycleExecutionResources' => $this->listLifecycleExecutionResources(),
            'listLifecycleExecutions' => $this->listLifecycleExecutions(),
            'listLifecyclePolicies' => $this->listLifecyclePolicies(),
            'listTagsForResource' => $this->listTagsForResource(),
            'listWaitingWorkflowSteps' => $this->listWaitingWorkflowSteps(),
            'listWorkflowBuildVersions' => $this->listWorkflowBuildVersions(),
            'listWorkflowExecutions' => $this->listWorkflowExecutions(),
            'listWorkflowStepExecutions' => $this->listWorkflowStepExecutions(),
            'listWorkflows' => $this->listWorkflows(),
            'putComponentPolicy' => $this->putComponentPolicy(),
            'putContainerRecipePolicy' => $this->putContainerRecipePolicy(),
            'putImagePolicy' => $this->putImagePolicy(),
            'putImageRecipePolicy' => $this->putImageRecipePolicy(),
            'sendWorkflowStepAction' => $this->sendWorkflowStepAction(),
            'startImagePipelineExecution' => $this->startImagePipelineExecution(),
            'startResourceStateUpdate' => $this->startResourceStateUpdate(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateDistributionConfiguration' => $this->updateDistributionConfiguration(),
            'updateImagePipeline' => $this->updateImagePipeline(),
            'updateInfrastructureConfiguration' => $this->updateInfrastructureConfiguration(),
            'updateLifecyclePolicy' => $this->updateLifecyclePolicy(),
        };
    }
    private function cancelImageCreation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function cancelLifecycleExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('componentBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createContainerRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('containerRecipeArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createDistributionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createImagePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imagePipelineArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createImageRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imageRecipeArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createInfrastructureConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('componentBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteContainerRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('containerRecipeArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteDistributionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteImagePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imagePipelineArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteImageRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageRecipeArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteInfrastructureConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('component'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('changeDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedOsVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                    new \PHPStan\Type\Constant\ConstantStringType('obfuscate'),
                    new \PHPStan\Type\Constant\ConstantStringType('productCodes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('productCodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('productCodeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('marketplace'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getComponentPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getContainerRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('containerRecipe'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('components'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('dockerfileTemplateData'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetRepository'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('image'),
                        new \PHPStan\Type\Constant\ConstantStringType('blockDeviceMappings'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ebs'),
                            new \PHPStan\Type\Constant\ConstantStringType('virtualName'),
                            new \PHPStan\Type\Constant\ConstantStringType('noDevice'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('deleteOnTermination'),
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                    new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('io2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('st1'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('service'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getContainerRecipePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getDistributionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('distributions'),
                    new \PHPStan\Type\Constant\ConstantStringType('timeoutMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('region'),
                        new \PHPStan\Type\Constant\ConstantStringType('amiDistributionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerDistributionConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('licenseConfigurationArns'),
                        new \PHPStan\Type\Constant\ConstantStringType('launchTemplateConfigurations'),
                        new \PHPStan\Type\Constant\ConstantStringType('s3ExportConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('fastLaunchConfigurations'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetAccountIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('amiTags'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchPermission'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('userIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('userGroups'),
                                new \PHPStan\Type\Constant\ConstantStringType('organizationArns'),
                                new \PHPStan\Type\Constant\ConstantStringType('organizationalUnitArns'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerTags'),
                            new \PHPStan\Type\Constant\ConstantStringType('targetRepository'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('service'),
                                new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            ], [
                                new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('launchTemplateId'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            new \PHPStan\Type\Constant\ConstantStringType('setDefaultVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                            new \PHPStan\Type\Constant\ConstantStringType('diskImageFormat'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('VMDK'),
                                new \PHPStan\Type\Constant\ConstantStringType('RAW'),
                                new \PHPStan\Type\Constant\ConstantStringType('VHD'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('maxParallelLaunches'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchTemplate'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('targetResourceCount'),
                            ], [
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplateName'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplateVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('image'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedImageMetadataEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageRecipe'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerRecipe'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourcePipelineName'),
                    new \PHPStan\Type\Constant\ConstantStringType('sourcePipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('distributionConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTestsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('scanState'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('deprecationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflows'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGRATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('components'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('blockDeviceMappings'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('additionalInstanceConfiguration'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                            new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                            new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                            new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('componentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('ebs'),
                            new \PHPStan\Type\Constant\ConstantStringType('virtualName'),
                            new \PHPStan\Type\Constant\ConstantStringType('noDevice'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                new \PHPStan\Type\Constant\ConstantStringType('deleteOnTermination'),
                                new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeSize'),
                                new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                    new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('io2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                    new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                                    new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                                    new \PHPStan\Type\Constant\ConstantStringType('st1'),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('systemsManagerAgent'),
                            new \PHPStan\Type\Constant\ConstantStringType('userDataOverride'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('uninstallAfterBuild'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('containerType'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('platform'),
                        new \PHPStan\Type\Constant\ConstantStringType('owner'),
                        new \PHPStan\Type\Constant\ConstantStringType('version'),
                        new \PHPStan\Type\Constant\ConstantStringType('components'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceConfiguration'),
                        new \PHPStan\Type\Constant\ConstantStringType('dockerfileTemplateData'),
                        new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                        new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                        new \PHPStan\Type\Constant\ConstantStringType('parentImage'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                        new \PHPStan\Type\Constant\ConstantStringType('targetRepository'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                            new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                            new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('componentArn'),
                            new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('value'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('blockDeviceMappings'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                                new \PHPStan\Type\Constant\ConstantStringType('ebs'),
                                new \PHPStan\Type\Constant\ConstantStringType('virtualName'),
                                new \PHPStan\Type\Constant\ConstantStringType('noDevice'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                                    new \PHPStan\Type\Constant\ConstantStringType('deleteOnTermination'),
                                    new \PHPStan\Type\Constant\ConstantStringType('iops'),
                                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('volumeSize'),
                                    new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                                    new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                                ], [
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\BooleanType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                        new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('io2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                        new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                                        new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                                        new \PHPStan\Type\Constant\ConstantStringType('st1'),
                                    ]),
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('service'),
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceProfileName'),
                        new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('logging'),
                        new \PHPStan\Type\Constant\ConstantStringType('keyPair'),
                        new \PHPStan\Type\Constant\ConstantStringType('terminateInstanceOnFailure'),
                        new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                        new \PHPStan\Type\Constant\ConstantStringType('instanceMetadataOptions'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                        new \PHPStan\Type\Constant\ConstantStringType('placement'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('httpTokens'),
                            new \PHPStan\Type\Constant\ConstantStringType('httpPutResponseHopLimit'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                            new \PHPStan\Type\Constant\ConstantStringType('tenancy'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostId'),
                            new \PHPStan\Type\Constant\ConstantStringType('hostResourceGroupArn'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('default'),
                                new \PHPStan\Type\Constant\ConstantStringType('dedicated'),
                                new \PHPStan\Type\Constant\ConstantStringType('host'),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                        new \PHPStan\Type\Constant\ConstantStringType('distributions'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutMinutes'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                        new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                        new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('amiDistributionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerDistributionConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('licenseConfigurationArns'),
                            new \PHPStan\Type\Constant\ConstantStringType('launchTemplateConfigurations'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3ExportConfiguration'),
                            new \PHPStan\Type\Constant\ConstantStringType('fastLaunchConfigurations'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('name'),
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetAccountIds'),
                                new \PHPStan\Type\Constant\ConstantStringType('amiTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchPermission'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('userIds'),
                                    new \PHPStan\Type\Constant\ConstantStringType('userGroups'),
                                    new \PHPStan\Type\Constant\ConstantStringType('organizationArns'),
                                    new \PHPStan\Type\Constant\ConstantStringType('organizationalUnitArns'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('description'),
                                new \PHPStan\Type\Constant\ConstantStringType('containerTags'),
                                new \PHPStan\Type\Constant\ConstantStringType('targetRepository'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('service'),
                                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                                ], [
                                    new \PHPStan\Type\Constant\ConstantStringType('ECR'),
                                    new \PHPStan\Type\StringType(),
                                ]),
                            ]),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplateId'),
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                                new \PHPStan\Type\Constant\ConstantStringType('setDefaultVersion'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('roleName'),
                                new \PHPStan\Type\Constant\ConstantStringType('diskImageFormat'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Bucket'),
                                new \PHPStan\Type\Constant\ConstantStringType('s3Prefix'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('VMDK'),
                                    new \PHPStan\Type\Constant\ConstantStringType('RAW'),
                                    new \PHPStan\Type\Constant\ConstantStringType('VHD'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('enabled'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshotConfiguration'),
                                new \PHPStan\Type\Constant\ConstantStringType('maxParallelLaunches'),
                                new \PHPStan\Type\Constant\ConstantStringType('launchTemplate'),
                                new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceCount'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                ]),
                                new \PHPStan\Type\IntegerType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('launchTemplateId'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchTemplateName'),
                                    new \PHPStan\Type\Constant\ConstantStringType('launchTemplateVersion'),
                                ], [
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                    new \PHPStan\Type\StringType(),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageTestsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutMinutes'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amis'),
                        new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageUris'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ISO'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCANNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COLLECTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABANDONED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('TIMED_OUT'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageScanningEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerTags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('parallelGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABORT'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getImagePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imagePipeline'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedImageMetadataEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageRecipeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerRecipeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('distributionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTestsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateLastRun'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateNextRun'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflows'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageTestsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutMinutes'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scheduleExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionStartCondition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXPRESSION_MATCH_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageScanningEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerTags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('parallelGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABORT'),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getImagePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getImageRecipe(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageRecipe'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('components'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('blockDeviceMappings'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('workingDirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('additionalInstanceConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('componentArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('deviceName'),
                        new \PHPStan\Type\Constant\ConstantStringType('ebs'),
                        new \PHPStan\Type\Constant\ConstantStringType('virtualName'),
                        new \PHPStan\Type\Constant\ConstantStringType('noDevice'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('encrypted'),
                            new \PHPStan\Type\Constant\ConstantStringType('deleteOnTermination'),
                            new \PHPStan\Type\Constant\ConstantStringType('iops'),
                            new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                            new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeSize'),
                            new \PHPStan\Type\Constant\ConstantStringType('volumeType'),
                            new \PHPStan\Type\Constant\ConstantStringType('throughput'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('standard'),
                                new \PHPStan\Type\Constant\ConstantStringType('io1'),
                                new \PHPStan\Type\Constant\ConstantStringType('io2'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp2'),
                                new \PHPStan\Type\Constant\ConstantStringType('gp3'),
                                new \PHPStan\Type\Constant\ConstantStringType('sc1'),
                                new \PHPStan\Type\Constant\ConstantStringType('st1'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('systemsManagerAgent'),
                        new \PHPStan\Type\Constant\ConstantStringType('userDataOverride'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('uninstallAfterBuild'),
                        ], [
                            new \PHPStan\Type\BooleanType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getImageRecipePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('policy'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getInfrastructureConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfiguration'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('securityGroupIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('subnetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('logging'),
                    new \PHPStan\Type\Constant\ConstantStringType('keyPair'),
                    new \PHPStan\Type\Constant\ConstantStringType('terminateInstanceOnFailure'),
                    new \PHPStan\Type\Constant\ConstantStringType('snsTopicArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceMetadataOptions'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('placement'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('s3Logs'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                            new \PHPStan\Type\Constant\ConstantStringType('s3KeyPrefix'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('httpTokens'),
                        new \PHPStan\Type\Constant\ConstantStringType('httpPutResponseHopLimit'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('tenancy'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostId'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostResourceGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                            new \PHPStan\Type\Constant\ConstantStringType('dedicated'),
                            new \PHPStan\Type\Constant\ConstantStringType('host'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getLifecycleExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecution'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesImpactedSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hasImpactedResources'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function getLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicy'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('policyDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceSelection'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateLastRun'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_IMAGE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('action'),
                        new \PHPStan\Type\Constant\ConstantStringType('filter'),
                        new \PHPStan\Type\Constant\ConstantStringType('exclusionRules'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('includeResources'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DEPRECATE'),
                                new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                            ]),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('amis'),
                                new \PHPStan\Type\Constant\ConstantStringType('snapshots'),
                                new \PHPStan\Type\Constant\ConstantStringType('containers'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\BooleanType(),
                            ]),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('type'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                            new \PHPStan\Type\Constant\ConstantStringType('unit'),
                            new \PHPStan\Type\Constant\ConstantStringType('retainAtLeast'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('AGE'),
                                new \PHPStan\Type\Constant\ConstantStringType('COUNT'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                            ]),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('tagMap'),
                            new \PHPStan\Type\Constant\ConstantStringType('amis'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('isPublic'),
                                new \PHPStan\Type\Constant\ConstantStringType('regions'),
                                new \PHPStan\Type\Constant\ConstantStringType('sharedAccounts'),
                                new \PHPStan\Type\Constant\ConstantStringType('lastLaunched'),
                                new \PHPStan\Type\Constant\ConstantStringType('tagMap'),
                            ], [
                                new \PHPStan\Type\BooleanType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\Constant\ConstantArrayType([
                                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                                    new \PHPStan\Type\Constant\ConstantStringType('unit'),
                                ], [
                                    new \PHPStan\Type\IntegerType(),
                                    new \PHPStan\Type\UnionType([
                                        new \PHPStan\Type\Constant\ConstantStringType('DAYS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('WEEKS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('MONTHS'),
                                        new \PHPStan\Type\Constant\ConstantStringType('YEARS'),
                                    ]),
                                ]),
                                new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('recipes'),
                        new \PHPStan\Type\Constant\ConstantStringType('tagMap'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('semanticVersion'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function getMarketplaceResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('url'),
                new \PHPStan\Type\Constant\ConstantStringType('data'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWorkflow(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workflow'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('changeDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('data'),
                    new \PHPStan\Type\Constant\ConstantStringType('kmsKeyId'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTION'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('defaultValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('description'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getWorkflowExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('type'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('totalStepCount'),
                new \PHPStan\Type\Constant\ConstantStringType('totalStepsSucceeded'),
                new \PHPStan\Type\Constant\ConstantStringType('totalStepsFailed'),
                new \PHPStan\Type\Constant\ConstantStringType('totalStepsSkipped'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('parallelGroup'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                    new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTION'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getWorkflowStepExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('stepExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('name'),
                new \PHPStan\Type\Constant\ConstantStringType('description'),
                new \PHPStan\Type\Constant\ConstantStringType('action'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('rollbackStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                new \PHPStan\Type\Constant\ConstantStringType('timeoutSeconds'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                    new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function importComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('componentBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importDiskImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function importVmImage(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageArn'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComponentBuildVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('componentSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedOsVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('changeDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('publisher'),
                    new \PHPStan\Type\Constant\ConstantStringType('obfuscate'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listComponents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('componentVersionList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedOsVersions'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('productCodes'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('productCodeId'),
                        new \PHPStan\Type\Constant\ConstantStringType('productCodeType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantStringType('marketplace'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listContainerRecipes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('containerRecipeSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerType'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listDistributionConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionConfigurationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('regions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImageBuildVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('deprecationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGRATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amis'),
                        new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageUris'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ISO'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImagePackages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imagePackageList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('packageName'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImagePipelineImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSource'),
                    new \PHPStan\Type\Constant\ConstantStringType('deprecationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTING'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTEGRATING'),
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('amis'),
                        new \PHPStan\Type\Constant\ConstantStringType('containers'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('image'),
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('description'),
                            new \PHPStan\Type\Constant\ConstantStringType('state'),
                            new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('status'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CREATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('BUILDING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('TESTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('INTEGRATING'),
                                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                                ]),
                                new \PHPStan\Type\StringType(),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('region'),
                            new \PHPStan\Type\Constant\ConstantStringType('imageUris'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ISO'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImagePipelines(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imagePipelineList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('enhancedImageMetadataEnabled'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageRecipeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('containerRecipeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('distributionConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageTestsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('schedule'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateLastRun'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateNextRun'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageScanningConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflows'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageTestsEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('timeoutMinutes'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('scheduleExpression'),
                        new \PHPStan\Type\Constant\ConstantStringType('timezone'),
                        new \PHPStan\Type\Constant\ConstantStringType('pipelineExecutionStartCondition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXPRESSION_MATCH_ONLY'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXPRESSION_MATCH_AND_DEPENDENCY_UPDATES_AVAILABLE'),
                        ]),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageScanningEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('ecrConfiguration'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                            new \PHPStan\Type\Constant\ConstantStringType('containerTags'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('workflowArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('parameters'),
                        new \PHPStan\Type\Constant\ConstantStringType('parallelGroup'),
                        new \PHPStan\Type\Constant\ConstantStringType('onFailure'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('CONTINUE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABORT'),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImageRecipes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageRecipeSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('parentImage'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImageScanFindingAggregations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('aggregationType'),
                new \PHPStan\Type\Constant\ConstantStringType('responses'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('imagePipelineAggregation'),
                    new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityIdAggregation'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('imagePipelineArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('severityCounts'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('all'),
                            new \PHPStan\Type\Constant\ConstantStringType('critical'),
                            new \PHPStan\Type\Constant\ConstantStringType('high'),
                            new \PHPStan\Type\Constant\ConstantStringType('medium'),
                        ], [
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImageScanFindings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('findings'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('awsAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('imagePipelineArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('title'),
                    new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                    new \PHPStan\Type\Constant\ConstantStringType('severity'),
                    new \PHPStan\Type\Constant\ConstantStringType('firstObservedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('inspectorScore'),
                    new \PHPStan\Type\Constant\ConstantStringType('inspectorScoreDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('packageVulnerabilityDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('fixAvailable'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('recommendation'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                            new \PHPStan\Type\Constant\ConstantStringType('url'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('adjustedCvss'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('scoreSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('cvssSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('score'),
                            new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('adjustments'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('metric'),
                                new \PHPStan\Type\Constant\ConstantStringType('reason'),
                            ], [
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                            ]),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerabilityId'),
                        new \PHPStan\Type\Constant\ConstantStringType('vulnerablePackages'),
                        new \PHPStan\Type\Constant\ConstantStringType('source'),
                        new \PHPStan\Type\Constant\ConstantStringType('cvss'),
                        new \PHPStan\Type\Constant\ConstantStringType('relatedVulnerabilities'),
                        new \PHPStan\Type\Constant\ConstantStringType('sourceUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorSeverity'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorCreatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('vendorUpdatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('referenceUrls'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('name'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('sourceLayerHash'),
                            new \PHPStan\Type\Constant\ConstantStringType('epoch'),
                            new \PHPStan\Type\Constant\ConstantStringType('release'),
                            new \PHPStan\Type\Constant\ConstantStringType('arch'),
                            new \PHPStan\Type\Constant\ConstantStringType('packageManager'),
                            new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                            new \PHPStan\Type\Constant\ConstantStringType('fixedInVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('remediation'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('baseScore'),
                            new \PHPStan\Type\Constant\ConstantStringType('scoringVector'),
                            new \PHPStan\Type\Constant\ConstantStringType('version'),
                            new \PHPStan\Type\Constant\ConstantStringType('source'),
                        ], [
                            new \PHPStan\Type\FloatType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageVersionList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('platform'),
                    new \PHPStan\Type\Constant\ConstantStringType('osVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('buildType'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageSource'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI'),
                        new \PHPStan\Type\Constant\ConstantStringType('DOCKER'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('Windows'),
                        new \PHPStan\Type\Constant\ConstantStringType('Linux'),
                        new \PHPStan\Type\Constant\ConstantStringType('macOS'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('USER_INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SCHEDULED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ISO'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMAZON_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_MARKETPLACE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CUSTOM'),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listInfrastructureConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfigurationSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceTags'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceTypes'),
                    new \PHPStan\Type\Constant\ConstantStringType('instanceProfileName'),
                    new \PHPStan\Type\Constant\ConstantStringType('placement'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('availabilityZone'),
                        new \PHPStan\Type\Constant\ConstantStringType('tenancy'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostId'),
                        new \PHPStan\Type\Constant\ConstantStringType('hostResourceGroupArn'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('default'),
                            new \PHPStan\Type\Constant\ConstantStringType('dedicated'),
                            new \PHPStan\Type\Constant\ConstantStringType('host'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLifecycleExecutionResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionState'),
                new \PHPStan\Type\Constant\ConstantStringType('resources'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('reason'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('accountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('region'),
                    new \PHPStan\Type\Constant\ConstantStringType('snapshots'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageUris'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPRECATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DISABLE'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('snapshotId'),
                        new \PHPStan\Type\Constant\ConstantStringType('state'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('status'),
                            new \PHPStan\Type\Constant\ConstantStringType('reason'),
                        ], [
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                                new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                                new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                                new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLifecycleExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourcesImpactedSummary'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('hasImpactedResources'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listLifecyclePolicies(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicySummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('executionRole'),
                    new \PHPStan\Type\Constant\ConstantStringType('resourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateLastRun'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AMI_IMAGE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONTAINER_IMAGE'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
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
    private function listWaitingWorkflowSteps(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('steps'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stepExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkflowBuildVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workflowSummaryList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('changeDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('state'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('tags'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('reason'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkflowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowExecutions'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalStepCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalStepsSucceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalStepsFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('totalStepsSkipped'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('parallelGroup'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTION'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkflowStepExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('steps'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('workflowExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('message'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('stepExecutionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('action'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('rollbackStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('message'),
                    new \PHPStan\Type\Constant\ConstantStringType('inputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('startTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('endTime'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listWorkflows(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('workflowVersionList'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('version'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                    new \PHPStan\Type\Constant\ConstantStringType('owner'),
                    new \PHPStan\Type\Constant\ConstantStringType('dateCreated'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('BUILD'),
                        new \PHPStan\Type\Constant\ConstantStringType('TEST'),
                        new \PHPStan\Type\Constant\ConstantStringType('DISTRIBUTION'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putComponentPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('componentArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putContainerRecipePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('containerRecipeArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putImagePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function putImageRecipePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageRecipeArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function sendWorkflowStepAction(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('stepExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startImagePipelineExecution(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imageBuildVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function startResourceStateUpdate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecycleExecutionId'),
                new \PHPStan\Type\Constant\ConstantStringType('resourceArn'),
            ], [
                new \PHPStan\Type\StringType(),
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
    private function updateDistributionConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('distributionConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateImagePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('imagePipelineArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateInfrastructureConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('requestId'),
                new \PHPStan\Type\Constant\ConstantStringType('clientToken'),
                new \PHPStan\Type\Constant\ConstantStringType('infrastructureConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateLifecyclePolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('lifecyclePolicyArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}