<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class ProtonClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\Proton\ProtonClient>
     */
    public function getClass(): string
    {
        return \Aws\Proton\ProtonClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'acceptEnvironmentAccountConnection',
            'cancelComponentDeployment',
            'cancelEnvironmentDeployment',
            'cancelServiceInstanceDeployment',
            'cancelServicePipelineDeployment',
            'createComponent',
            'createEnvironment',
            'createEnvironmentAccountConnection',
            'createEnvironmentTemplate',
            'createEnvironmentTemplateVersion',
            'createRepository',
            'createService',
            'createServiceInstance',
            'createServiceSyncConfig',
            'createServiceTemplate',
            'createServiceTemplateVersion',
            'createTemplateSyncConfig',
            'deleteComponent',
            'deleteDeployment',
            'deleteEnvironment',
            'deleteEnvironmentAccountConnection',
            'deleteEnvironmentTemplate',
            'deleteEnvironmentTemplateVersion',
            'deleteRepository',
            'deleteService',
            'deleteServiceSyncConfig',
            'deleteServiceTemplate',
            'deleteServiceTemplateVersion',
            'deleteTemplateSyncConfig',
            'getAccountSettings',
            'getComponent',
            'getDeployment',
            'getEnvironment',
            'getEnvironmentAccountConnection',
            'getEnvironmentTemplate',
            'getEnvironmentTemplateVersion',
            'getRepository',
            'getRepositorySyncStatus',
            'getResourcesSummary',
            'getService',
            'getServiceInstance',
            'getServiceInstanceSyncStatus',
            'getServiceSyncBlockerSummary',
            'getServiceSyncConfig',
            'getServiceTemplate',
            'getServiceTemplateVersion',
            'getTemplateSyncConfig',
            'getTemplateSyncStatus',
            'listComponentOutputs',
            'listComponentProvisionedResources',
            'listComponents',
            'listDeployments',
            'listEnvironmentAccountConnections',
            'listEnvironmentOutputs',
            'listEnvironmentProvisionedResources',
            'listEnvironmentTemplateVersions',
            'listEnvironmentTemplates',
            'listEnvironments',
            'listRepositories',
            'listRepositorySyncDefinitions',
            'listServiceInstanceOutputs',
            'listServiceInstanceProvisionedResources',
            'listServiceInstances',
            'listServicePipelineOutputs',
            'listServicePipelineProvisionedResources',
            'listServiceTemplateVersions',
            'listServiceTemplates',
            'listServices',
            'listTagsForResource',
            'notifyResourceDeploymentStatusChange',
            'rejectEnvironmentAccountConnection',
            'tagResource',
            'untagResource',
            'updateAccountSettings',
            'updateComponent',
            'updateEnvironment',
            'updateEnvironmentAccountConnection',
            'updateEnvironmentTemplate',
            'updateEnvironmentTemplateVersion',
            'updateService',
            'updateServiceInstance',
            'updateServicePipeline',
            'updateServiceSyncBlocker',
            'updateServiceSyncConfig',
            'updateServiceTemplate',
            'updateServiceTemplateVersion',
            'updateTemplateSyncConfig',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'acceptEnvironmentAccountConnection' => $this->acceptEnvironmentAccountConnection(),
            'cancelComponentDeployment' => $this->cancelComponentDeployment(),
            'cancelEnvironmentDeployment' => $this->cancelEnvironmentDeployment(),
            'cancelServiceInstanceDeployment' => $this->cancelServiceInstanceDeployment(),
            'cancelServicePipelineDeployment' => $this->cancelServicePipelineDeployment(),
            'createComponent' => $this->createComponent(),
            'createEnvironment' => $this->createEnvironment(),
            'createEnvironmentAccountConnection' => $this->createEnvironmentAccountConnection(),
            'createEnvironmentTemplate' => $this->createEnvironmentTemplate(),
            'createEnvironmentTemplateVersion' => $this->createEnvironmentTemplateVersion(),
            'createRepository' => $this->createRepository(),
            'createService' => $this->createService(),
            'createServiceInstance' => $this->createServiceInstance(),
            'createServiceSyncConfig' => $this->createServiceSyncConfig(),
            'createServiceTemplate' => $this->createServiceTemplate(),
            'createServiceTemplateVersion' => $this->createServiceTemplateVersion(),
            'createTemplateSyncConfig' => $this->createTemplateSyncConfig(),
            'deleteComponent' => $this->deleteComponent(),
            'deleteDeployment' => $this->deleteDeployment(),
            'deleteEnvironment' => $this->deleteEnvironment(),
            'deleteEnvironmentAccountConnection' => $this->deleteEnvironmentAccountConnection(),
            'deleteEnvironmentTemplate' => $this->deleteEnvironmentTemplate(),
            'deleteEnvironmentTemplateVersion' => $this->deleteEnvironmentTemplateVersion(),
            'deleteRepository' => $this->deleteRepository(),
            'deleteService' => $this->deleteService(),
            'deleteServiceSyncConfig' => $this->deleteServiceSyncConfig(),
            'deleteServiceTemplate' => $this->deleteServiceTemplate(),
            'deleteServiceTemplateVersion' => $this->deleteServiceTemplateVersion(),
            'deleteTemplateSyncConfig' => $this->deleteTemplateSyncConfig(),
            'getAccountSettings' => $this->getAccountSettings(),
            'getComponent' => $this->getComponent(),
            'getDeployment' => $this->getDeployment(),
            'getEnvironment' => $this->getEnvironment(),
            'getEnvironmentAccountConnection' => $this->getEnvironmentAccountConnection(),
            'getEnvironmentTemplate' => $this->getEnvironmentTemplate(),
            'getEnvironmentTemplateVersion' => $this->getEnvironmentTemplateVersion(),
            'getRepository' => $this->getRepository(),
            'getRepositorySyncStatus' => $this->getRepositorySyncStatus(),
            'getResourcesSummary' => $this->getResourcesSummary(),
            'getService' => $this->getService(),
            'getServiceInstance' => $this->getServiceInstance(),
            'getServiceInstanceSyncStatus' => $this->getServiceInstanceSyncStatus(),
            'getServiceSyncBlockerSummary' => $this->getServiceSyncBlockerSummary(),
            'getServiceSyncConfig' => $this->getServiceSyncConfig(),
            'getServiceTemplate' => $this->getServiceTemplate(),
            'getServiceTemplateVersion' => $this->getServiceTemplateVersion(),
            'getTemplateSyncConfig' => $this->getTemplateSyncConfig(),
            'getTemplateSyncStatus' => $this->getTemplateSyncStatus(),
            'listComponentOutputs' => $this->listComponentOutputs(),
            'listComponentProvisionedResources' => $this->listComponentProvisionedResources(),
            'listComponents' => $this->listComponents(),
            'listDeployments' => $this->listDeployments(),
            'listEnvironmentAccountConnections' => $this->listEnvironmentAccountConnections(),
            'listEnvironmentOutputs' => $this->listEnvironmentOutputs(),
            'listEnvironmentProvisionedResources' => $this->listEnvironmentProvisionedResources(),
            'listEnvironmentTemplateVersions' => $this->listEnvironmentTemplateVersions(),
            'listEnvironmentTemplates' => $this->listEnvironmentTemplates(),
            'listEnvironments' => $this->listEnvironments(),
            'listRepositories' => $this->listRepositories(),
            'listRepositorySyncDefinitions' => $this->listRepositorySyncDefinitions(),
            'listServiceInstanceOutputs' => $this->listServiceInstanceOutputs(),
            'listServiceInstanceProvisionedResources' => $this->listServiceInstanceProvisionedResources(),
            'listServiceInstances' => $this->listServiceInstances(),
            'listServicePipelineOutputs' => $this->listServicePipelineOutputs(),
            'listServicePipelineProvisionedResources' => $this->listServicePipelineProvisionedResources(),
            'listServiceTemplateVersions' => $this->listServiceTemplateVersions(),
            'listServiceTemplates' => $this->listServiceTemplates(),
            'listServices' => $this->listServices(),
            'listTagsForResource' => $this->listTagsForResource(),
            'notifyResourceDeploymentStatusChange' => $this->notifyResourceDeploymentStatusChange(),
            'rejectEnvironmentAccountConnection' => $this->rejectEnvironmentAccountConnection(),
            'tagResource' => $this->tagResource(),
            'untagResource' => $this->untagResource(),
            'updateAccountSettings' => $this->updateAccountSettings(),
            'updateComponent' => $this->updateComponent(),
            'updateEnvironment' => $this->updateEnvironment(),
            'updateEnvironmentAccountConnection' => $this->updateEnvironmentAccountConnection(),
            'updateEnvironmentTemplate' => $this->updateEnvironmentTemplate(),
            'updateEnvironmentTemplateVersion' => $this->updateEnvironmentTemplateVersion(),
            'updateService' => $this->updateService(),
            'updateServiceInstance' => $this->updateServiceInstance(),
            'updateServicePipeline' => $this->updateServicePipeline(),
            'updateServiceSyncBlocker' => $this->updateServiceSyncBlocker(),
            'updateServiceSyncConfig' => $this->updateServiceSyncConfig(),
            'updateServiceTemplate' => $this->updateServiceTemplate(),
            'updateServiceTemplateVersion' => $this->updateServiceTemplateVersion(),
            'updateTemplateSyncConfig' => $this->updateTemplateSyncConfig(),
        };
    }
    private function acceptEnvironmentAccountConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function cancelComponentDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('component'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function cancelEnvironmentDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('protonServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function cancelServiceInstanceDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function cancelServicePipelineDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('component'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('protonServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createEnvironmentAccountConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createEnvironmentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createEnvironmentTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function createService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('spec'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServiceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function createServiceSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServiceTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createServiceTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibleEnvironmentTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedComponentSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('DIRECTLY_DEFINED')),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function createTemplateSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('subdirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('component'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deployment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('initialState'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('component'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('servicePipeline'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateFile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulComponentDeploymentIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulEnvironmentDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulServicePipelineDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_PIPELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPONENT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('component'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('servicePipeline'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateFile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulComponentDeploymentIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulEnvironmentDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulServicePipelineDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('protonServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironmentAccountConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironmentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteEnvironmentTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function deleteService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('spec'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteServiceSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteServiceTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteServiceTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibleEnvironmentTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedComponentSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('DIRECTLY_DEFINED')),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function deleteTemplateSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('subdirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineCodebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineServiceRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('component'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getDeployment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('deployment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('initialState'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetState'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('component'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('servicePipeline'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateFile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulComponentDeploymentIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulEnvironmentDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulServicePipelineDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_PIPELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPONENT'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('component'),
                        new \PHPStan\Type\Constant\ConstantStringType('environment'),
                        new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
                        new \PHPStan\Type\Constant\ConstantStringType('servicePipeline'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                            new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateFile'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulComponentDeploymentIds'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulEnvironmentDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('lastSuccessfulServicePipelineDeploymentId'),
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('spec'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                            new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('protonServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEnvironmentAccountConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getEnvironmentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getEnvironmentTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getRepository(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('repository'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getRepositorySyncStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('latestSync'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('event'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getResourcesSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('counts'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('components'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('environments'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelines'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstances'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('services'),
                ], [
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('behindMajor'),
                        new \PHPStan\Type\Constant\ConstantStringType('behindMinor'),
                        new \PHPStan\Type\Constant\ConstantStringType('failed'),
                        new \PHPStan\Type\Constant\ConstantStringType('total'),
                        new \PHPStan\Type\Constant\ConstantStringType('upToDate'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('spec'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function getServiceInstanceSyncStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('desiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('latestSuccessfulSync'),
                new \PHPStan\Type\Constant\ConstantStringType('latestSync'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('directory'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('sha'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('initialRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetRevision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('event'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('initialRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetRevision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('event'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getServiceSyncBlockerSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceSyncBlockerSummary'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('latestBlockers'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('id'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('resolvedReason'),
                        new \PHPStan\Type\Constant\ConstantStringType('status'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('key'),
                            new \PHPStan\Type\Constant\ConstantStringType('value'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                        ]),
                        new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getServiceTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibleEnvironmentTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedComponentSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('DIRECTLY_DEFINED')),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function getTemplateSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('subdirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function getTemplateSyncStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('desiredState'),
                new \PHPStan\Type\Constant\ConstantStringType('latestSuccessfulSync'),
                new \PHPStan\Type\Constant\ConstantStringType('latestSync'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('directory'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('sha'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('initialRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetRevision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('event'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('events'),
                    new \PHPStan\Type\Constant\ConstantStringType('initialRevision'),
                    new \PHPStan\Type\Constant\ConstantStringType('startedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetRevision'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('event'),
                        new \PHPStan\Type\Constant\ConstantStringType('externalId'),
                        new \PHPStan\Type\Constant\ConstantStringType('time'),
                        new \PHPStan\Type\Constant\ConstantStringType('type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('INITIATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('directory'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                        new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                        new \PHPStan\Type\Constant\ConstantStringType('sha'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function listComponentOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueString'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listComponentProvisionedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM'),
                    ]),
                ])),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
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
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('completedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceCreatedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('targetResourceType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_PIPELINE'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_INSTANCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPONENT'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironmentAccountConnections(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnections'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listEnvironmentOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueString'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listEnvironmentProvisionedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listEnvironmentTemplateVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('templateVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listEnvironmentTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('templates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listEnvironments(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environments'),
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('protonServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listRepositories(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('repositories'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('connectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provider'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listRepositorySyncDefinitions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('syncDefinitions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('directory'),
                    new \PHPStan\Type\Constant\ConstantStringType('parent'),
                    new \PHPStan\Type\Constant\ConstantStringType('target'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listServiceInstanceOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueString'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listServiceInstanceProvisionedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listServiceInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceInstances'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listServicePipelineOutputs(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('outputs'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('valueString'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listServicePipelineProvisionedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('provisionedResources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('identifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningEngine'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CLOUDFORMATION'),
                        new \PHPStan\Type\Constant\ConstantStringType('TERRAFORM'),
                    ]),
                ])),
            ]),
        ]);
    }
    private function listServiceTemplateVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('templateVersions'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listServiceTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('templates'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listServices(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('services'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function listTagsForResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('nextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('tags'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('key'),
                    new \PHPStan\Type\Constant\ConstantStringType('value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
            ]),
        ]);
    }
    private function notifyResourceDeploymentStatusChange(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function rejectEnvironmentAccountConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
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
    private function updateAccountSettings(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('accountSettings'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineCodebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineServiceRoleArn'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateComponent(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('component'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceSpec'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateEnvironment(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environment'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnectionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('protonServiceRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioningRepository'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('branch'),
                        new \PHPStan\Type\Constant\ConstantStringType('name'),
                        new \PHPStan\Type\Constant\ConstantStringType('provider'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                            new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                            new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateEnvironmentAccountConnection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentAccountConnection'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('codebuildRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('componentRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('managementAccountId'),
                    new \PHPStan\Type\Constant\ConstantStringType('requestedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('roleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CONNECTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('REJECTED'),
                    ]),
                ]),
            ]),
        ]);
    }
    private function updateEnvironmentTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('provisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateEnvironmentTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('environmentTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateService(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('service'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('branchName'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryConnectionArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryId'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                        new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                        new \PHPStan\Type\Constant\ConstantStringType('spec'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED_CLEANUP_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateServiceInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('environmentName'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
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
    private function updateServicePipeline(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('pipeline'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('deploymentStatusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastAttemptedDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentAttemptedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastDeploymentSucceededAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastSucceededDeploymentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('spec'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMajorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateServiceSyncBlocker(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceInstanceName'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                new \PHPStan\Type\Constant\ConstantStringType('serviceSyncBlocker'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('contexts'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('id'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('resolvedReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('type'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('key'),
                        new \PHPStan\Type\Constant\ConstantStringType('value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RESOLVED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantStringType('AUTOMATED'),
                ]),
            ]),
        ]);
    }
    private function updateServiceSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('filePath'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('serviceName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateServiceTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplate'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('displayName'),
                    new \PHPStan\Type\Constant\ConstantStringType('encryptionKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('name'),
                    new \PHPStan\Type\Constant\ConstantStringType('pipelineProvisioning'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedVersion'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('CUSTOMER_MANAGED'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateServiceTemplateVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('serviceTemplateVersion'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('compatibleEnvironmentTemplates'),
                    new \PHPStan\Type\Constant\ConstantStringType('createdAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('description'),
                    new \PHPStan\Type\Constant\ConstantStringType('lastModifiedAt'),
                    new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('minorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('recommendedMinorVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('schema'),
                    new \PHPStan\Type\Constant\ConstantStringType('status'),
                    new \PHPStan\Type\Constant\ConstantStringType('statusMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('supportedComponentSources'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('majorVersion'),
                        new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('REGISTRATION_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DRAFT'),
                        new \PHPStan\Type\Constant\ConstantStringType('PUBLISHED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantStringType('DIRECTLY_DEFINED')),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function updateTemplateSyncConfig(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('templateSyncConfig'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('branch'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryName'),
                    new \PHPStan\Type\Constant\ConstantStringType('repositoryProvider'),
                    new \PHPStan\Type\Constant\ConstantStringType('subdirectory'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('templateType'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB'),
                        new \PHPStan\Type\Constant\ConstantStringType('GITHUB_ENTERPRISE'),
                        new \PHPStan\Type\Constant\ConstantStringType('BITBUCKET'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ENVIRONMENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE'),
                    ]),
                ]),
            ]),
        ]);
    }
}