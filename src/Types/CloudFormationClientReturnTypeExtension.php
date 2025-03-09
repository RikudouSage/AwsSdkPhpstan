<?php

namespace Rikudou\AwsSdkPhpstan\Types;

final class CloudFormationClientReturnTypeExtension implements \PHPStan\Type\DynamicMethodReturnTypeExtension
{
    /**
     * @return class-string<\Aws\CloudFormation\CloudFormationClient>
     */
    public function getClass(): string
    {
        return \Aws\CloudFormation\CloudFormationClient::class;
    }
    public function isMethodSupported(\PHPStan\Reflection\MethodReflection $methodReflection): bool
    {
        return in_array($methodReflection->getName(), [
            'activateOrganizationsAccess',
            'activateType',
            'batchDescribeTypeConfigurations',
            'cancelUpdateStack',
            'continueUpdateRollback',
            'createChangeSet',
            'createGeneratedTemplate',
            'createStack',
            'createStackInstances',
            'createStackRefactor',
            'createStackSet',
            'deactivateOrganizationsAccess',
            'deactivateType',
            'deleteChangeSet',
            'deleteGeneratedTemplate',
            'deleteStack',
            'deleteStackInstances',
            'deleteStackSet',
            'deregisterType',
            'describeAccountLimits',
            'describeChangeSet',
            'describeChangeSetHooks',
            'describeGeneratedTemplate',
            'describeOrganizationsAccess',
            'describePublisher',
            'describeResourceScan',
            'describeStackDriftDetectionStatus',
            'describeStackEvents',
            'describeStackInstance',
            'describeStackRefactor',
            'describeStackResource',
            'describeStackResourceDrifts',
            'describeStackResources',
            'describeStackSet',
            'describeStackSetOperation',
            'describeStacks',
            'describeType',
            'describeTypeRegistration',
            'detectStackDrift',
            'detectStackResourceDrift',
            'detectStackSetDrift',
            'estimateTemplateCost',
            'executeChangeSet',
            'executeStackRefactor',
            'getGeneratedTemplate',
            'getStackPolicy',
            'getTemplate',
            'getTemplateSummary',
            'importStacksToStackSet',
            'listChangeSets',
            'listExports',
            'listGeneratedTemplates',
            'listHookResults',
            'listImports',
            'listResourceScanRelatedResources',
            'listResourceScanResources',
            'listResourceScans',
            'listStackInstanceResourceDrifts',
            'listStackInstances',
            'listStackRefactorActions',
            'listStackRefactors',
            'listStackResources',
            'listStackSetAutoDeploymentTargets',
            'listStackSetOperationResults',
            'listStackSetOperations',
            'listStackSets',
            'listStacks',
            'listTypeRegistrations',
            'listTypeVersions',
            'listTypes',
            'publishType',
            'recordHandlerProgress',
            'registerPublisher',
            'registerType',
            'rollbackStack',
            'setStackPolicy',
            'setTypeConfiguration',
            'setTypeDefaultVersion',
            'signalResource',
            'startResourceScan',
            'stopStackSetOperation',
            'testType',
            'updateGeneratedTemplate',
            'updateStack',
            'updateStackInstances',
            'updateStackSet',
            'updateTerminationProtection',
            'validateTemplate',
        ], true);
    }
    public function getTypeFromMethodCall(\PHPStan\Reflection\MethodReflection $methodReflection, \PhpParser\Node\Expr\MethodCall $methodCall, \PHPStan\Analyser\Scope $scope): ?\PHPStan\Type\Type
    {
        return match ((string) $methodCall->name) {
            default => throw new \RuntimeException('Unsupported method'),
            'activateOrganizationsAccess' => $this->activateOrganizationsAccess(),
            'activateType' => $this->activateType(),
            'batchDescribeTypeConfigurations' => $this->batchDescribeTypeConfigurations(),
            'cancelUpdateStack' => $this->cancelUpdateStack(),
            'continueUpdateRollback' => $this->continueUpdateRollback(),
            'createChangeSet' => $this->createChangeSet(),
            'createGeneratedTemplate' => $this->createGeneratedTemplate(),
            'createStack' => $this->createStack(),
            'createStackInstances' => $this->createStackInstances(),
            'createStackRefactor' => $this->createStackRefactor(),
            'createStackSet' => $this->createStackSet(),
            'deactivateOrganizationsAccess' => $this->deactivateOrganizationsAccess(),
            'deactivateType' => $this->deactivateType(),
            'deleteChangeSet' => $this->deleteChangeSet(),
            'deleteGeneratedTemplate' => $this->deleteGeneratedTemplate(),
            'deleteStack' => $this->deleteStack(),
            'deleteStackInstances' => $this->deleteStackInstances(),
            'deleteStackSet' => $this->deleteStackSet(),
            'deregisterType' => $this->deregisterType(),
            'describeAccountLimits' => $this->describeAccountLimits(),
            'describeChangeSet' => $this->describeChangeSet(),
            'describeChangeSetHooks' => $this->describeChangeSetHooks(),
            'describeGeneratedTemplate' => $this->describeGeneratedTemplate(),
            'describeOrganizationsAccess' => $this->describeOrganizationsAccess(),
            'describePublisher' => $this->describePublisher(),
            'describeResourceScan' => $this->describeResourceScan(),
            'describeStackDriftDetectionStatus' => $this->describeStackDriftDetectionStatus(),
            'describeStackEvents' => $this->describeStackEvents(),
            'describeStackInstance' => $this->describeStackInstance(),
            'describeStackRefactor' => $this->describeStackRefactor(),
            'describeStackResource' => $this->describeStackResource(),
            'describeStackResourceDrifts' => $this->describeStackResourceDrifts(),
            'describeStackResources' => $this->describeStackResources(),
            'describeStackSet' => $this->describeStackSet(),
            'describeStackSetOperation' => $this->describeStackSetOperation(),
            'describeStacks' => $this->describeStacks(),
            'describeType' => $this->describeType(),
            'describeTypeRegistration' => $this->describeTypeRegistration(),
            'detectStackDrift' => $this->detectStackDrift(),
            'detectStackResourceDrift' => $this->detectStackResourceDrift(),
            'detectStackSetDrift' => $this->detectStackSetDrift(),
            'estimateTemplateCost' => $this->estimateTemplateCost(),
            'executeChangeSet' => $this->executeChangeSet(),
            'executeStackRefactor' => $this->executeStackRefactor(),
            'getGeneratedTemplate' => $this->getGeneratedTemplate(),
            'getStackPolicy' => $this->getStackPolicy(),
            'getTemplate' => $this->getTemplate(),
            'getTemplateSummary' => $this->getTemplateSummary(),
            'importStacksToStackSet' => $this->importStacksToStackSet(),
            'listChangeSets' => $this->listChangeSets(),
            'listExports' => $this->listExports(),
            'listGeneratedTemplates' => $this->listGeneratedTemplates(),
            'listHookResults' => $this->listHookResults(),
            'listImports' => $this->listImports(),
            'listResourceScanRelatedResources' => $this->listResourceScanRelatedResources(),
            'listResourceScanResources' => $this->listResourceScanResources(),
            'listResourceScans' => $this->listResourceScans(),
            'listStackInstanceResourceDrifts' => $this->listStackInstanceResourceDrifts(),
            'listStackInstances' => $this->listStackInstances(),
            'listStackRefactorActions' => $this->listStackRefactorActions(),
            'listStackRefactors' => $this->listStackRefactors(),
            'listStackResources' => $this->listStackResources(),
            'listStackSetAutoDeploymentTargets' => $this->listStackSetAutoDeploymentTargets(),
            'listStackSetOperationResults' => $this->listStackSetOperationResults(),
            'listStackSetOperations' => $this->listStackSetOperations(),
            'listStackSets' => $this->listStackSets(),
            'listStacks' => $this->listStacks(),
            'listTypeRegistrations' => $this->listTypeRegistrations(),
            'listTypeVersions' => $this->listTypeVersions(),
            'listTypes' => $this->listTypes(),
            'publishType' => $this->publishType(),
            'recordHandlerProgress' => $this->recordHandlerProgress(),
            'registerPublisher' => $this->registerPublisher(),
            'registerType' => $this->registerType(),
            'rollbackStack' => $this->rollbackStack(),
            'setStackPolicy' => $this->setStackPolicy(),
            'setTypeConfiguration' => $this->setTypeConfiguration(),
            'setTypeDefaultVersion' => $this->setTypeDefaultVersion(),
            'signalResource' => $this->signalResource(),
            'startResourceScan' => $this->startResourceScan(),
            'stopStackSetOperation' => $this->stopStackSetOperation(),
            'testType' => $this->testType(),
            'updateGeneratedTemplate' => $this->updateGeneratedTemplate(),
            'updateStack' => $this->updateStack(),
            'updateStackInstances' => $this->updateStackInstances(),
            'updateStackSet' => $this->updateStackSet(),
            'updateTerminationProtection' => $this->updateTerminationProtection(),
            'validateTemplate' => $this->validateTemplate(),
        };
    }
    private function activateOrganizationsAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function activateType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function batchDescribeTypeConfigurations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Errors'),
                new \PHPStan\Type\Constant\ConstantStringType('UnprocessedTypeConfigurations'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurations'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorCode'),
                    new \PHPStan\Type\Constant\ConstantStringType('ErrorMessage'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationIdentifier'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationAlias'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationArn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODULE'),
                            new \PHPStan\Type\Constant\ConstantStringType('HOOK'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODULE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('Alias'),
                    new \PHPStan\Type\Constant\ConstantStringType('Configuration'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultConfiguration'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
            ]),
        ]);
    }
    private function cancelUpdateStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function continueUpdateRollback(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function createChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Id'),
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createGeneratedTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeneratedTemplateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStackInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStackRefactor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackRefactorId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function createStackSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackSetId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deactivateOrganizationsAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deactivateType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deleteGeneratedTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function deleteStackInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function deleteStackSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function deregisterType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function describeAccountLimits(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('AccountLimits'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('NotificationARNs'),
                new \PHPStan\Type\Constant\ConstantStringType('RollbackConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                new \PHPStan\Type\Constant\ConstantStringType('Changes'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('IncludeNestedStacks'),
                new \PHPStan\Type\Constant\ConstantStringType('ParentChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('RootChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('OnStackFailure'),
                new \PHPStan\Type\Constant\ConstantStringType('ImportExistingResources'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('UsePreviousValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResolvedValue'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('OBSOLETE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('RollbackTriggers'),
                    new \PHPStan\Type\Constant\ConstantStringType('MonitoringTimeInMinutes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Key'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookInvocationCount'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceChange'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('Resource'),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PolicyAction'),
                        new \PHPStan\Type\Constant\ConstantStringType('Action'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                        new \PHPStan\Type\Constant\ConstantStringType('Replacement'),
                        new \PHPStan\Type\Constant\ConstantStringType('Scope'),
                        new \PHPStan\Type\Constant\ConstantStringType('Details'),
                        new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                        new \PHPStan\Type\Constant\ConstantStringType('ModuleInfo'),
                        new \PHPStan\Type\Constant\ConstantStringType('BeforeContext'),
                        new \PHPStan\Type\Constant\ConstantStringType('AfterContext'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Delete'),
                            new \PHPStan\Type\Constant\ConstantStringType('Retain'),
                            new \PHPStan\Type\Constant\ConstantStringType('Snapshot'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceAndDelete'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceAndRetain'),
                            new \PHPStan\Type\Constant\ConstantStringType('ReplaceAndSnapshot'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Add'),
                            new \PHPStan\Type\Constant\ConstantStringType('Modify'),
                            new \PHPStan\Type\Constant\ConstantStringType('Remove'),
                            new \PHPStan\Type\Constant\ConstantStringType('Import'),
                            new \PHPStan\Type\Constant\ConstantStringType('Dynamic'),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('True'),
                            new \PHPStan\Type\Constant\ConstantStringType('False'),
                            new \PHPStan\Type\Constant\ConstantStringType('Conditional'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                            new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                            new \PHPStan\Type\Constant\ConstantStringType('CreationPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdatePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('DeletionPolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('UpdateReplacePolicy'),
                            new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                        ])),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Target'),
                            new \PHPStan\Type\Constant\ConstantStringType('Evaluation'),
                            new \PHPStan\Type\Constant\ConstantStringType('ChangeSource'),
                            new \PHPStan\Type\Constant\ConstantStringType('CausingEntity'),
                        ], [
                            new \PHPStan\Type\Constant\ConstantArrayType([
                                new \PHPStan\Type\Constant\ConstantStringType('Attribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('Name'),
                                new \PHPStan\Type\Constant\ConstantStringType('RequiresRecreation'),
                                new \PHPStan\Type\Constant\ConstantStringType('Path'),
                                new \PHPStan\Type\Constant\ConstantStringType('BeforeValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('AfterValue'),
                                new \PHPStan\Type\Constant\ConstantStringType('AttributeChangeType'),
                            ], [
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                                    new \PHPStan\Type\Constant\ConstantStringType('CreationPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdatePolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('DeletionPolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('UpdateReplacePolicy'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Never'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Conditionally'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Always'),
                                ]),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\StringType(),
                                new \PHPStan\Type\UnionType([
                                    new \PHPStan\Type\Constant\ConstantStringType('Add'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Remove'),
                                    new \PHPStan\Type\Constant\ConstantStringType('Modify'),
                                ]),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Static'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dynamic'),
                            ]),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('ParameterReference'),
                                new \PHPStan\Type\Constant\ConstantStringType('ResourceAttribute'),
                                new \PHPStan\Type\Constant\ConstantStringType('DirectModification'),
                                new \PHPStan\Type\Constant\ConstantStringType('Automatic'),
                            ]),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('TypeHierarchy'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogicalIdHierarchy'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DO_NOTHING'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                ]),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeChangeSetHooks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                new \PHPStan\Type\Constant\ConstantStringType('ChangeSetName'),
                new \PHPStan\Type\Constant\ConstantStringType('Hooks'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                new \PHPStan\Type\Constant\ConstantStringType('StackName'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InvocationPoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TargetDetails'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_PROVISION'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResourceTargetDetails'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                            new \PHPStan\Type\Constant\ConstantStringType('ResourceAction'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\UnionType([
                                new \PHPStan\Type\Constant\ConstantStringType('Add'),
                                new \PHPStan\Type\Constant\ConstantStringType('Modify'),
                                new \PHPStan\Type\Constant\ConstantStringType('Remove'),
                                new \PHPStan\Type\Constant\ConstantStringType('Import'),
                                new \PHPStan\Type\Constant\ConstantStringType('Dynamic'),
                            ]),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PLANNING'),
                    new \PHPStan\Type\Constant\ConstantStringType('PLANNED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeGeneratedTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeneratedTemplateId'),
                new \PHPStan\Type\Constant\ConstantStringType('GeneratedTemplateName'),
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                new \PHPStan\Type\Constant\ConstantStringType('Progress'),
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateConfiguration'),
                new \PHPStan\Type\Constant\ConstantStringType('TotalWarnings'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        new \PHPStan\Type\Constant\ConstantStringType('Properties'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('MUTUALLY_EXCLUSIVE_PROPERTIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNSUPPORTED_PROPERTIES'),
                            new \PHPStan\Type\Constant\ConstantStringType('MUTUALLY_EXCLUSIVE_TYPES'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('PropertyPath'),
                            new \PHPStan\Type\Constant\ConstantStringType('Required'),
                            new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\BooleanType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                    ])),
                ])),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesSucceeded'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesFailed'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesProcessing'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourcesPending'),
                ], [
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\IntegerType(),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionPolicy'),
                    new \PHPStan\Type\Constant\ConstantStringType('UpdateReplacePolicy'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('RETAIN'),
                    ]),
                ]),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeOrganizationsAccess(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('ENABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DISABLED_PERMANENTLY'),
                ]),
            ]),
        ]);
    }
    private function describePublisher(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublisherId'),
                new \PHPStan\Type\Constant\ConstantStringType('PublisherStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('IdentityProvider'),
                new \PHPStan\Type\Constant\ConstantStringType('PublisherProfile'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('VERIFIED'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNVERIFIED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('AWS_Marketplace'),
                    new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                    new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeResourceScan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceScanId'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                new \PHPStan\Type\Constant\ConstantStringType('PercentageCompleted'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcesScanned'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourcesRead'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
                new \PHPStan\Type\FloatType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\IntegerType(),
            ]),
        ]);
    }
    private function describeStackDriftDetectionStatus(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                new \PHPStan\Type\Constant\ConstantStringType('StackDriftDetectionId'),
                new \PHPStan\Type\Constant\ConstantStringType('StackDriftStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DetectionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('DetectionStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DriftedStackResourceCount'),
                new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                    new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('DETECTION_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DETECTION_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DETECTION_COMPLETE'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\IntegerType(),
                new \PHPStan\Type\ObjectType('DateTimeInterface'),
            ]),
        ]);
    }
    private function describeStackEvents(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackEvents'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('EventId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ClientRequestToken'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookType'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookInvocationPoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookFailureMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_COMPLETE_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_COMPLETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_PROVISION'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStackInstance(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackInstance'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('Account'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterOverrides'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastDriftCheckTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastOperationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsePreviousValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResolvedValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INOPERABLE'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INOPERABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_SUSPENDED_ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_IMPORT'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ]),
            ]),
        ]);
    }
    private function describeStackRefactor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('StackRefactorId'),
                new \PHPStan\Type\Constant\ConstantStringType('StackIds'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatusReason'),
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('OBSOLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStackResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackResourceDetail'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModuleInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackResourceDriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeHierarchy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalIdHierarchy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeStackResourceDrifts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackResourceDrifts'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceIdContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('PropertyDifferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackResourceDriftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModuleInfo'),
                ], [
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PropertyPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DifferenceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL'),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeHierarchy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalIdHierarchy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeStackResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackResources'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModuleInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackResourceDriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeHierarchy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalIdHierarchy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
            ]),
        ]);
    }
    private function describeStackSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackSet'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateBody'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministrationRoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetDriftDetectionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoDeployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedExecution'),
                    new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsePreviousValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResolvedValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                    ])),
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
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DriftDetectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDriftCheckTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DriftedStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InSyncStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgressStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailedStackInstancesCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetainStacksOnAccountRemoval'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function describeStackSetOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackSetOperation'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationPreferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetainStacks'),
                    new \PHPStan\Type\Constant\ConstantStringType('AdministrationRoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleName'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeploymentTargets'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetDriftDetectionDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DETECT_DRIFT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegionConcurrencyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionOrder'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureToleranceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureTolerancePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConcurrencyMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRICT_FAILURE_TOLERANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOFT_FAILURE_TOLERANCE'),
                        ]),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Accounts'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountsUrl'),
                        new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitIds'),
                        new \PHPStan\Type\Constant\ConstantStringType('AccountFilterType'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('NONE'),
                            new \PHPStan\Type\Constant\ConstantStringType('INTERSECTION'),
                            new \PHPStan\Type\Constant\ConstantStringType('DIFFERENCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNION'),
                        ]),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('DriftDetectionStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastDriftCheckTimestamp'),
                        new \PHPStan\Type\Constant\ConstantStringType('TotalStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('DriftedStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InSyncStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('InProgressStackInstancesCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailedStackInstancesCount'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('COMPLETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARTIAL_SUCCESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                            new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailedStackInstancesCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function describeStacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Stacks'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('RollbackConfiguration'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('DisableRollback'),
                    new \PHPStan\Type\Constant\ConstantStringType('NotificationARNs'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeoutInMinutes'),
                    new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                    new \PHPStan\Type\Constant\ConstantStringType('Outputs'),
                    new \PHPStan\Type\Constant\ConstantStringType('RoleARN'),
                    new \PHPStan\Type\Constant\ConstantStringType('Tags'),
                    new \PHPStan\Type\Constant\ConstantStringType('EnableTerminationProtection'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('RetainExceptOnCreate'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('ParameterValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('UsePreviousValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ResolvedValue'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RollbackTriggers'),
                        new \PHPStan\Type\Constant\ConstantStringType('MonitoringTimeInMinutes'),
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                            new \PHPStan\Type\Constant\ConstantStringType('Type'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ])),
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVIEW_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_COMPLETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\IntegerType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                        new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('OutputKey'),
                        new \PHPStan\Type\Constant\ConstantStringType('OutputValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('Description'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExportName'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackDriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('STANDARD'),
                        new \PHPStan\Type\Constant\ConstantStringType('FORCE_DELETE_STACK'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CONFIGURATION_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('VALIDATION_FAILED'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function describeType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                new \PHPStan\Type\Constant\ConstantStringType('Type'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeTestsStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeTestsStatusDescription'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Schema'),
                new \PHPStan\Type\Constant\ConstantStringType('ProvisioningType'),
                new \PHPStan\Type\Constant\ConstantStringType('DeprecatedStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('LoggingConfig'),
                new \PHPStan\Type\Constant\ConstantStringType('RequiredActivatedTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('ExecutionRoleArn'),
                new \PHPStan\Type\Constant\ConstantStringType('Visibility'),
                new \PHPStan\Type\Constant\ConstantStringType('SourceUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('DocumentationUrl'),
                new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                new \PHPStan\Type\Constant\ConstantStringType('TimeCreated'),
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationSchema'),
                new \PHPStan\Type\Constant\ConstantStringType('PublisherId'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginalTypeName'),
                new \PHPStan\Type\Constant\ConstantStringType('OriginalTypeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('PublicVersionNumber'),
                new \PHPStan\Type\Constant\ConstantStringType('LatestPublicVersion'),
                new \PHPStan\Type\Constant\ConstantStringType('IsActivated'),
                new \PHPStan\Type\Constant\ConstantStringType('AutoUpdate'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('MODULE'),
                    new \PHPStan\Type\Constant\ConstantStringType('HOOK'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PASSED'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('NOT_TESTED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('NON_PROVISIONABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IMMUTABLE'),
                    new \PHPStan\Type\Constant\ConstantStringType('FULLY_MUTABLE'),
                ]),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('LIVE'),
                    new \PHPStan\Type\Constant\ConstantStringType('DEPRECATED'),
                ]),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogRoleArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogGroupName'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ]),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('TypeNameAlias'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublisherId'),
                    new \PHPStan\Type\Constant\ConstantStringType('SupportedMajorVersions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\IntegerType()),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('PUBLIC'),
                    new \PHPStan\Type\Constant\ConstantStringType('PRIVATE'),
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
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\BooleanType(),
                new \PHPStan\Type\BooleanType(),
            ]),
        ]);
    }
    private function describeTypeRegistration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ProgressStatus'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeArn'),
                new \PHPStan\Type\Constant\ConstantStringType('TypeVersionArn'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detectStackDrift(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackDriftDetectionId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function detectStackResourceDrift(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackResourceDrift'),
            ], [
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceIdContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExpectedProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('ActualProperties'),
                    new \PHPStan\Type\Constant\ConstantStringType('PropertyDifferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackResourceDriftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModuleInfo'),
                ], [
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PropertyPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DifferenceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL'),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeHierarchy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalIdHierarchy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ]),
            ]),
        ]);
    }
    private function detectStackSetDrift(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function estimateTemplateCost(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Url'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function executeChangeSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function executeStackRefactor(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function getGeneratedTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Status'),
                new \PHPStan\Type\Constant\ConstantStringType('TemplateBody'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                    new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                    new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                ]),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getStackPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackPolicyBody'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function getTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TemplateBody'),
                new \PHPStan\Type\Constant\ConstantStringType('StagesAvailable'),
            ], [
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('Original'),
                    new \PHPStan\Type\Constant\ConstantStringType('Processed'),
                ])),
            ]),
        ]);
    }
    private function getTemplateSummary(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('CapabilitiesReason'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceTypes'),
                new \PHPStan\Type\Constant\ConstantStringType('Version'),
                new \PHPStan\Type\Constant\ConstantStringType('Metadata'),
                new \PHPStan\Type\Constant\ConstantStringType('DeclaredTransforms'),
                new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifierSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('Warnings'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterType'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoEcho'),
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
                    ], [
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceIds'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifiers'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('UnrecognizedResourceTypes'),
                ], [
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ]),
            ]),
        ]);
    }
    private function importStacksToStackSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listChangeSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ChangeSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('IncludeNestedStacks'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentChangeSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootChangeSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ImportExistingResources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('OBSOLETE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listExports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Exports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ExportingStackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Name'),
                    new \PHPStan\Type\Constant\ConstantStringType('Value'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listGeneratedTemplates(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratedTemplateId'),
                    new \PHPStan\Type\Constant\ConstantStringType('GeneratedTemplateName'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('NumberOfResources'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\IntegerType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listHookResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TargetType'),
                new \PHPStan\Type\Constant\ConstantStringType('TargetId'),
                new \PHPStan\Type\Constant\ConstantStringType('HookResults'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CHANGE_SET'),
                    new \PHPStan\Type\Constant\ConstantStringType('STACK'),
                    new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                    new \PHPStan\Type\Constant\ConstantStringType('CLOUD_CONTROL'),
                ]),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('InvocationPoint'),
                    new \PHPStan\Type\Constant\ConstantStringType('FailureMode'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeConfigurationVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('HookStatusReason'),
                ], [
                    new \PHPStan\Type\Constant\ConstantStringType('PRE_PROVISION'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('FAIL'),
                        new \PHPStan\Type\Constant\ConstantStringType('WARN'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_COMPLETE_SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_COMPLETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listImports(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Imports'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceScanRelatedResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RelatedResources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedByStack'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceScanResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Resources'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedByStack'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listResourceScans(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceScanSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceScanId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StartTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('PercentageCompleted'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPIRED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\FloatType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackInstanceResourceDrifts(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceIdContext'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('PropertyDifferences'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackResourceDriftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('Timestamp'),
                ], [
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
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('PropertyPath'),
                        new \PHPStan\Type\Constant\ConstantStringType('ExpectedValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('ActualValue'),
                        new \PHPStan\Type\Constant\ConstantStringType('DifferenceType'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('ADD'),
                            new \PHPStan\Type\Constant\ConstantStringType('REMOVE'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_EQUAL'),
                        ]),
                    ])),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODIFIED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('Account'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackInstanceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastDriftCheckTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastOperationId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CURRENT'),
                        new \PHPStan\Type\Constant\ConstantStringType('OUTDATED'),
                        new \PHPStan\Type\Constant\ConstantStringType('INOPERABLE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('DetailedStatus'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                            new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                            new \PHPStan\Type\Constant\ConstantStringType('INOPERABLE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED_SUSPENDED_ACCOUNT'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED_IMPORT'),
                        ]),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackRefactorActions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackRefactorActions'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Entity'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceIdentifier'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Detection'),
                    new \PHPStan\Type\Constant\ConstantStringType('DetectionReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('TagResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('UntagResources'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceMapping'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('MOVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('STACK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AUTO'),
                        new \PHPStan\Type\Constant\ConstantStringType('MANUAL'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Key'),
                        new \PHPStan\Type\Constant\ConstantStringType('Value'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ])),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Source'),
                        new \PHPStan\Type\Constant\ConstantStringType('Destination'),
                    ], [
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                        new \PHPStan\Type\Constant\ConstantArrayType([
                            new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                            new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                        ], [
                            new \PHPStan\Type\StringType(),
                            new \PHPStan\Type\StringType(),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackRefactors(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackRefactorSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackRefactorId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ExecutionStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('UNAVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('AVAILABLE'),
                        new \PHPStan\Type\Constant\ConstantStringType('OBSOLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXECUTE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackResources(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackResourceSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('LogicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('PhysicalResourceId'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceType'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('ResourceStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftInformation'),
                    new \PHPStan\Type\Constant\ConstantStringType('ModuleInfo'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_SKIPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('EXPORT_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackResourceDriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('MODIFIED'),
                            new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('TypeHierarchy'),
                        new \PHPStan\Type\Constant\ConstantStringType('LogicalIdHierarchy'),
                    ], [
                        new \PHPStan\Type\StringType(),
                        new \PHPStan\Type\StringType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackSetAutoDeploymentTargets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Regions'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackSetOperationResults(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Account'),
                    new \PHPStan\Type\Constant\ConstantStringType('Region'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('AccountGateResult'),
                    new \PHPStan\Type\Constant\ConstantStringType('OrganizationalUnitId'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('PENDING'),
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CANCELLED'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Status'),
                        new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                            new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                            new \PHPStan\Type\Constant\ConstantStringType('SKIPPED'),
                        ]),
                        new \PHPStan\Type\StringType(),
                    ]),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackSetOperations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Action'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('EndTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('StatusDetails'),
                    new \PHPStan\Type\Constant\ConstantStringType('OperationPreferences'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DETECT_DRIFT'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RUNNING'),
                        new \PHPStan\Type\Constant\ConstantStringType('SUCCEEDED'),
                        new \PHPStan\Type\Constant\ConstantStringType('FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPING'),
                        new \PHPStan\Type\Constant\ConstantStringType('STOPPED'),
                        new \PHPStan\Type\Constant\ConstantStringType('QUEUED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('FailedStackInstancesCount'),
                    ], [
                        new \PHPStan\Type\IntegerType(),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('RegionConcurrencyType'),
                        new \PHPStan\Type\Constant\ConstantStringType('RegionOrder'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureToleranceCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('FailureTolerancePercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentCount'),
                        new \PHPStan\Type\Constant\ConstantStringType('MaxConcurrentPercentage'),
                        new \PHPStan\Type\Constant\ConstantStringType('ConcurrencyMode'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('SEQUENTIAL'),
                            new \PHPStan\Type\Constant\ConstantStringType('PARALLEL'),
                        ]),
                        new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\IntegerType(),
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('STRICT_FAILURE_TOLERANCE'),
                            new \PHPStan\Type\Constant\ConstantStringType('SOFT_FAILURE_TOLERANCE'),
                        ]),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStackSets(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Summaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetName'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackSetId'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('Status'),
                    new \PHPStan\Type\Constant\ConstantStringType('AutoDeployment'),
                    new \PHPStan\Type\Constant\ConstantStringType('PermissionModel'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastDriftCheckTimestamp'),
                    new \PHPStan\Type\Constant\ConstantStringType('ManagedExecution'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('ACTIVE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETED'),
                    ]),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Enabled'),
                        new \PHPStan\Type\Constant\ConstantStringType('RetainStacksOnAccountRemoval'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                        new \PHPStan\Type\BooleanType(),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('SERVICE_MANAGED'),
                        new \PHPStan\Type\Constant\ConstantStringType('SELF_MANAGED'),
                    ]),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                        new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                        new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                    ]),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('Active'),
                    ], [
                        new \PHPStan\Type\BooleanType(),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listStacks(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('StackId'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackName'),
                    new \PHPStan\Type\Constant\ConstantStringType('TemplateDescription'),
                    new \PHPStan\Type\Constant\ConstantStringType('CreationTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdatedTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('DeletionTime'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackStatus'),
                    new \PHPStan\Type\Constant\ConstantStringType('StackStatusReason'),
                    new \PHPStan\Type\Constant\ConstantStringType('ParentId'),
                    new \PHPStan\Type\Constant\ConstantStringType('RootId'),
                    new \PHPStan\Type\Constant\ConstantStringType('DriftInformation'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('CREATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('DELETE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE_CLEANUP_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('UPDATE_ROLLBACK_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('REVIEW_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_COMPLETE'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_IN_PROGRESS'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_FAILED'),
                        new \PHPStan\Type\Constant\ConstantStringType('IMPORT_ROLLBACK_COMPLETE'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\Constant\ConstantArrayType([
                        new \PHPStan\Type\Constant\ConstantStringType('StackDriftStatus'),
                        new \PHPStan\Type\Constant\ConstantStringType('LastCheckTimestamp'),
                    ], [
                        new \PHPStan\Type\UnionType([
                            new \PHPStan\Type\Constant\ConstantStringType('DRIFTED'),
                            new \PHPStan\Type\Constant\ConstantStringType('IN_SYNC'),
                            new \PHPStan\Type\Constant\ConstantStringType('UNKNOWN'),
                            new \PHPStan\Type\Constant\ConstantStringType('NOT_CHECKED'),
                        ]),
                        new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    ]),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTypeRegistrations(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationTokenList'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTypeVersions(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypeVersionSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('VersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsDefaultVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('Arn'),
                    new \PHPStan\Type\Constant\ConstantStringType('TimeCreated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicVersionNumber'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODULE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function listTypes(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypeSummaries'),
                new \PHPStan\Type\Constant\ConstantStringType('NextToken'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('Type'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultVersionId'),
                    new \PHPStan\Type\Constant\ConstantStringType('TypeArn'),
                    new \PHPStan\Type\Constant\ConstantStringType('LastUpdated'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublisherId'),
                    new \PHPStan\Type\Constant\ConstantStringType('OriginalTypeName'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublicVersionNumber'),
                    new \PHPStan\Type\Constant\ConstantStringType('LatestPublicVersion'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublisherIdentity'),
                    new \PHPStan\Type\Constant\ConstantStringType('PublisherName'),
                    new \PHPStan\Type\Constant\ConstantStringType('IsActivated'),
                ], [
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('RESOURCE'),
                        new \PHPStan\Type\Constant\ConstantStringType('MODULE'),
                        new \PHPStan\Type\Constant\ConstantStringType('HOOK'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\ObjectType('DateTimeInterface'),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\UnionType([
                        new \PHPStan\Type\Constant\ConstantStringType('AWS_Marketplace'),
                        new \PHPStan\Type\Constant\ConstantStringType('GitHub'),
                        new \PHPStan\Type\Constant\ConstantStringType('Bitbucket'),
                    ]),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                ])),
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function publishType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublicTypeArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function recordHandlerProgress(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function registerPublisher(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('PublisherId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function registerType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('RegistrationToken'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function rollbackStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setStackPolicy(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function setTypeConfiguration(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ConfigurationArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function setTypeDefaultVersion(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function signalResource(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\ArrayType(new \PHPStan\Type\StringType(), new \PHPStan\Type\NullType()),
        ]);
    }
    private function startResourceScan(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('ResourceScanId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function stopStackSetOperation(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([], []),
        ]);
    }
    private function testType(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('TypeVersionArn'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateGeneratedTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('GeneratedTemplateId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStack(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStackInstances(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateStackSet(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('OperationId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function updateTerminationProtection(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('StackId'),
            ], [
                new \PHPStan\Type\StringType(),
            ]),
        ]);
    }
    private function validateTemplate(): ?\PHPStan\Type\Type
    {
        return new \PHPStan\Type\Generic\GenericObjectType('Aws\Result', [
            new \PHPStan\Type\Constant\ConstantArrayType([
                new \PHPStan\Type\Constant\ConstantStringType('Parameters'),
                new \PHPStan\Type\Constant\ConstantStringType('Description'),
                new \PHPStan\Type\Constant\ConstantStringType('Capabilities'),
                new \PHPStan\Type\Constant\ConstantStringType('CapabilitiesReason'),
                new \PHPStan\Type\Constant\ConstantStringType('DeclaredTransforms'),
            ], [
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\Constant\ConstantArrayType([
                    new \PHPStan\Type\Constant\ConstantStringType('ParameterKey'),
                    new \PHPStan\Type\Constant\ConstantStringType('DefaultValue'),
                    new \PHPStan\Type\Constant\ConstantStringType('NoEcho'),
                    new \PHPStan\Type\Constant\ConstantStringType('Description'),
                ], [
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\StringType(),
                    new \PHPStan\Type\BooleanType(),
                    new \PHPStan\Type\StringType(),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\UnionType([
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_NAMED_IAM'),
                    new \PHPStan\Type\Constant\ConstantStringType('CAPABILITY_AUTO_EXPAND'),
                ])),
                new \PHPStan\Type\StringType(),
                new \PHPStan\Type\ArrayType(new \PHPStan\Type\IntegerType(), new \PHPStan\Type\StringType()),
            ]),
        ]);
    }
}