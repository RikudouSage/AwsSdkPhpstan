<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class IoTThingsGraphClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\IoTThingsGraph\IoTThingsGraphClient>
     */
    public function getClass(): string
    {
        return \Aws\IoTThingsGraph\IoTThingsGraphClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'associateEntityToThing',
            'createFlowTemplate',
            'createSystemInstance',
            'createSystemTemplate',
            'deleteFlowTemplate',
            'deleteNamespace',
            'deleteSystemInstance',
            'deleteSystemTemplate',
            'deploySystemInstance',
            'deprecateFlowTemplate',
            'deprecateSystemTemplate',
            'describeNamespace',
            'dissociateEntityFromThing',
            'getEntities',
            'getFlowTemplate',
            'getFlowTemplateRevisions',
            'getNamespaceDeletionStatus',
            'getSystemInstance',
            'getSystemTemplate',
            'getSystemTemplateRevisions',
            'getUploadStatus',
            'listFlowExecutionMessages',
            'listTagsForResource',
            'searchEntities',
            'searchFlowExecutions',
            'searchFlowTemplates',
            'searchSystemInstances',
            'searchSystemTemplates',
            'searchThings',
            'tagResource',
            'undeploySystemInstance',
            'untagResource',
            'updateFlowTemplate',
            'updateSystemTemplate',
            'uploadEntityDefinitions',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'associateEntityToThing' => $this->associateEntityToThing(),
            'createFlowTemplate' => $this->createFlowTemplate(),
            'createSystemInstance' => $this->createSystemInstance(),
            'createSystemTemplate' => $this->createSystemTemplate(),
            'deleteFlowTemplate' => $this->deleteFlowTemplate(),
            'deleteNamespace' => $this->deleteNamespace(),
            'deleteSystemInstance' => $this->deleteSystemInstance(),
            'deleteSystemTemplate' => $this->deleteSystemTemplate(),
            'deploySystemInstance' => $this->deploySystemInstance(),
            'deprecateFlowTemplate' => $this->deprecateFlowTemplate(),
            'deprecateSystemTemplate' => $this->deprecateSystemTemplate(),
            'describeNamespace' => $this->describeNamespace(),
            'dissociateEntityFromThing' => $this->dissociateEntityFromThing(),
            'getEntities' => $this->getEntities(),
            'getFlowTemplate' => $this->getFlowTemplate(),
            'getFlowTemplateRevisions' => $this->getFlowTemplateRevisions(),
            'getNamespaceDeletionStatus' => $this->getNamespaceDeletionStatus(),
            'getSystemInstance' => $this->getSystemInstance(),
            'getSystemTemplate' => $this->getSystemTemplate(),
            'getSystemTemplateRevisions' => $this->getSystemTemplateRevisions(),
            'getUploadStatus' => $this->getUploadStatus(),
            'listFlowExecutionMessages' => $this->listFlowExecutionMessages(),
            'listTagsForResource' => $this->listTagsForResource(),
            'searchEntities' => $this->searchEntities(),
            'searchFlowExecutions' => $this->searchFlowExecutions(),
            'searchFlowTemplates' => $this->searchFlowTemplates(),
            'searchSystemInstances' => $this->searchSystemInstances(),
            'searchSystemTemplates' => $this->searchSystemTemplates(),
            'searchThings' => $this->searchThings(),
            'tagResource' => $this->tagResource(),
            'undeploySystemInstance' => $this->undeploySystemInstance(),
            'untagResource' => $this->untagResource(),
            'updateFlowTemplate' => $this->updateFlowTemplate(),
            'updateSystemTemplate' => $this->updateSystemTemplate(),
            'uploadEntityDefinitions' => $this->uploadEntityDefinitions(),
        };
    }
    private function associateEntityToThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createFlowTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function createSystemInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupVersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED_IN_TARGET'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDEPLOY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED_IN_TARGET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GREENGRASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createSystemTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function deleteFlowTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteSystemInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteSystemTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deploySystemInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
                new \PHPStan\Type\Constant\ConstantStringType('greengrassDeploymentId'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupVersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED_IN_TARGET'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDEPLOY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED_IN_TARGET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GREENGRASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deprecateFlowTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deprecateSystemTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeNamespace(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('trackingNamespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('trackingNamespaceVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceVersion'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function dissociateEntityFromThing(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function getEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('descriptions'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROPERTY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENUM'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('language'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
            ]),
        ]);
    }
    private function getFlowTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('validatedNamespaceVersion'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('language'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getFlowTemplateRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getNamespaceDeletionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('status'),
                new \PHPStan\Type\Constant\ConstantStringType('errorCode'),
                new \PHPStan\Type\Constant\ConstantStringType('errorMessage'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getSystemInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('s3BucketName'),
                    new \PHPStan\Type\Constant\ConstantStringType('metricsConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('validatedNamespaceVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('validatedDependencyRevisions'),
                    new \PHPStan\Type\Constant\ConstantStringType('flowActionsRoleArn'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupVersionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_DEPLOYED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED_IN_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDEPLOY_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED_IN_TARGET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GREENGRASS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('language'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('cloudMetricEnabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('metricRuleRoleArn'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('id'),
                            new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\IntegerType(),
                        ]),
                    ])),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getSystemTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('description'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('summary'),
                    new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    new \PHPStan\Type\Constant\ConstantStringType('validatedNamespaceVersion'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('language'),
                        new \PHPStan\Type\Constant\ConstantStringType('text'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\IntegerType(),
                ]),
            ]),
        ]);
    }
    private function getSystemTemplateRevisions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getUploadStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
                new \PHPStan\Type\Constant\ConstantStringType('uploadStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceArn'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceName'),
                new \PHPStan\Type\Constant\ConstantStringType('namespaceVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('failureReason'),
                new \PHPStan\Type\Constant\ConstantStringType('createdDate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function listFlowExecutionMessages(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('messages'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('messageId'),
                        new \PHPStan\Type\Constant\ConstantStringType('eventType'),
                        new \PHPStan\Type\Constant\ConstantStringType('timestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('payload'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_ABORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('EXECUTION_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STEP_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STEP_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('STEP_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_SCHEDULED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_STARTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVITY_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('START_FLOW_EXECUTION_TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('SCHEDULE_NEXT_READY_STEPS_TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('THING_ACTION_TASK'),
                            new \PHPStan\Type\Constant\ConstantStringType('THING_ACTION_TASK_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('THING_ACTION_TASK_SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACKNOWLEDGE_TASK_MESSAGE'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchEntities(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('descriptions'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('definition'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEVICE_MODEL'),
                            new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY'),
                            new \PHPStan\Type\Constant\ConstantStringType('STATE'),
                            new \PHPStan\Type\Constant\ConstantStringType('ACTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('EVENT'),
                            new \PHPStan\Type\Constant\ConstantStringType('PROPERTY'),
                            new \PHPStan\Type\Constant\ConstantStringType('MAPPING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ENUM'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('language'),
                            new \PHPStan\Type\Constant\ConstantStringType('text'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantStringType('GRAPHQL'),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchFlowExecutions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('flowExecutionId'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('systemInstanceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('flowTemplateId'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('ABORTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchFlowTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchSystemInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('target'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupName'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                        new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupVersionId'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_DEPLOYED'),
                            new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED_IN_TARGET'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNDEPLOY_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED_IN_TARGET'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GREENGRASS'),
                            new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchSystemTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function searchThings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('things'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('thingArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('thingName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
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
    private function undeploySystemInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('updatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupId'),
                    new \PHPStan\Type\Constant\ConstantStringType('greengrassGroupVersionId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_DEPLOYED'),
                        new \PHPStan\Type\Constant\ConstantStringType('BOOTSTRAP'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DEPLOYED_IN_TARGET'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNDEPLOY_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING_DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED_IN_TARGET'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GREENGRASS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUD'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function untagResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function updateFlowTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function updateSystemTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('summary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('revisionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ]),
            ]),
        ]);
    }
    private function uploadEntityDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('uploadId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
}